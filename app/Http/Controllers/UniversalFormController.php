<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UniversalMailService;
use App\Services\RecaptchaService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UniversalFormController extends Controller
{
    protected $mailService;
    protected $recaptchaService;

    public function __construct(UniversalMailService $mailService, RecaptchaService $recaptchaService)
    {
        $this->mailService = $mailService;
        $this->recaptchaService = $recaptchaService;
    }

    /**
     * Handle universal form submission
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        try {
            // Get all form data
            $formData = $request->all();
            
            // Determine form type and configuration based on URL or form data
            $formConfig = $this->determineFormConfig($request);
            
            // Verify reCAPTCHA first
            if (!$this->verifyRecaptcha($request)) {
                throw new \Exception('reCAPTCHA verification failed. Please try again.');
            }
            
            // Basic validation for common required fields
            $this->validateCommonFields($request, $formConfig);
            
            // Send email
            $emailSent = $this->mailService->sendFormSubmission($formData, [
                'subject' => $formConfig['subject'],
                'form_name' => $formConfig['form_name'],
                'to' => $formConfig['to'] ?? config('mail.to.address', config('mail.from.address')),
            ]);

            if ($emailSent) {
                $message = $formConfig['success_message'] ?? 'Thank you for your submission! We will get back to you soon.';
                
                // Return appropriate response based on request type
                if ($request->expectsJson() || $request->ajax()) {
                    return response()->json([
                        'success' => true,
                        'message' => $message,
                    ]);
                }
                
                return redirect()->back()->with('success', $message);
            } else {
                throw new \Exception('Failed to send email');
            }
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Please check your form data.',
                    'errors' => $e->errors(),
                ], 422);
            }
            
            return redirect()->back()->withErrors($e->errors())->withInput();
            
        } catch (\Exception $e) {
            Log::error('Universal Form Submission Error: ' . $e->getMessage(), [
                'form_data' => $formData,
                'user_ip' => $request->ip(),
                'url' => $request->fullUrl(),
            ]);
            
            $errorMessage = 'Sorry, there was an error processing your submission. Please try again.';
            
            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $errorMessage,
                ], 500);
            }
            
            return redirect()->back()->with('error', $errorMessage)->withInput();
        }
    }

    /**
     * Handle contact form submissions
     */
    public function contact(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Handle quote form submissions
     */
    public function quote(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Handle assessment form submissions
     */
    public function assessment(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Handle quick contact form submissions
     */
    public function quickContact(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Handle detailed contact form submissions
     */
    public function detailedContact(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Handle product inquiry form submissions
     */
    public function productInquiry(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Handle service request form submissions
     */
    public function serviceRequest(Request $request)
    {
        return $this->submit($request);
    }

    /**
     * Determine form configuration based on request
     *
     * @param Request $request
     * @return array
     */
    private function determineFormConfig(Request $request): array
    {
        $url = $request->fullUrl();
        $formType = $request->input('form_type', 'contact');
        $service = $request->input('service', '');
        $product = $request->input('product', '');

        // Default configuration
        $config = [
            'form_name' => 'Contact Form',
            'subject' => 'New Contact Form Submission',
            'success_message' => 'Thank you for your message! We will get back to you soon.',
            'required_fields' => ['name', 'email'],
        ];

        // Customize based on form type or URL patterns
        if (str_contains($url, 'quote') || $formType === 'quote') {
            $config['form_name'] = 'Quote Request';
            $config['subject'] = 'New Quote Request';
            $config['success_message'] = 'Thank you for your quote request! We will contact you within 24 hours.';
            $config['required_fields'] = ['name', 'email', 'phone'];
            
        } elseif ($formType === 'quick_contact') {
            $config['form_name'] = 'Quick Contact Form';
            $config['subject'] = 'New Quick Contact Inquiry';
            $config['success_message'] = 'Thank you for your message! We will get back to you within 2 hours during business hours.';
            $config['required_fields'] = ['name', 'phone', 'email', 'service', 'message'];
            
        } elseif ($formType === 'detailed_contact') {
            $config['form_name'] = 'Detailed Assessment Request';
            $config['subject'] = 'New Detailed Assessment Request';
            $config['success_message'] = 'Thank you for your detailed request! Our team will review and contact you within 24 hours to schedule your assessment.';
            $config['required_fields'] = ['name', 'phone', 'email', 'city', 'service', 'timeline'];
            
        } elseif (str_contains($url, 'assessment') || $formType === 'assessment') {
            $config['form_name'] = 'Assessment Request';
            $config['subject'] = 'New Assessment Request';
            $config['success_message'] = 'Thank you for your assessment request! We will schedule your free consultation.';
            $config['required_fields'] = ['name', 'email', 'phone'];
            
        } elseif (str_contains($url, 'product') || !empty($product) || $formType === 'product_inquiry') {
            $config['form_name'] = 'Product Inquiry';
            $config['subject'] = 'New Product Inquiry' . (!empty($product) ? " - {$product}" : '');
            $config['success_message'] = 'Thank you for your product inquiry! We will contact you with details.';
            $config['required_fields'] = ['firstName', 'lastName', 'email', 'phone'];
            
        } elseif (str_contains($url, 'service') || !empty($service)) {
            $config['form_name'] = 'Service Request';
            $config['subject'] = 'New Service Request' . (!empty($service) ? " - {$service}" : '');
            $config['success_message'] = 'Thank you for your service request! We will contact you to discuss your needs.';
            $config['required_fields'] = ['name', 'email', 'phone'];
            
        } elseif (str_contains($url, 'rental')) {
            $config['form_name'] = 'Rental Inquiry';
            $config['subject'] = 'New Rental Inquiry';
            $config['success_message'] = 'Thank you for your rental inquiry! We will contact you with availability and pricing.';
            $config['required_fields'] = ['name', 'email', 'phone'];
            
        } elseif (str_contains($url, 'stair-lift') || str_contains($url, 'areas/')) {
            $city = $this->extractCityFromUrl($url);
            $config['form_name'] = 'Local Area Quote Request';
            $config['subject'] = 'New Quote Request' . ($city ? " - {$city}" : '');
            $config['success_message'] = "Thank you for your quote request!" . ($city ? " Our {$city} team will contact you within 24 hours." : " We will contact you within 24 hours.");
            $config['required_fields'] = ['first_name', 'last_name', 'email', 'phone'];
        }

        return $config;
    }

    /**
     * Extract city name from URL
     *
     * @param string $url
     * @return string|null
     */
    private function extractCityFromUrl(string $url): ?string
    {
        $cityMappings = [
            'burnaby' => 'Burnaby',
            'north-vancouver' => 'North Vancouver',
            'west-vancouver' => 'West Vancouver',
            'white-rock' => 'White Rock',
            'richmond-hill' => 'Richmond Hill',
            'coquitlam' => 'Coquitlam',
            'port-coquitlam' => 'Port Coquitlam',
            'langley' => 'Langley',
        ];

        foreach ($cityMappings as $slug => $name) {
            if (str_contains($url, $slug)) {
                return $name;
            }
        }

        return null;
    }

    /**
     * Validate common form fields
     *
     * @param Request $request
     * @param array $config
     * @throws \Illuminate\Validation\ValidationException
     */
    private function validateCommonFields(Request $request, array $config): void
    {
        $rules = [];
        $messages = [];

        // Build validation rules based on required fields
        foreach ($config['required_fields'] as $field) {
            switch ($field) {
                case 'name':
                case 'first_name':
                case 'firstName':
                case 'last_name':
                case 'lastName':
                    $rules[$field] = 'required|string|max:255';
                    $messages["{$field}.required"] = ucwords(str_replace('_', ' ', $field)) . ' is required.';
                    break;
                case 'email':
                    $rules[$field] = 'required|email|max:255';
                    $messages["{$field}.required"] = 'Email address is required.';
                    $messages["{$field}.email"] = 'Please enter a valid email address.';
                    break;
                case 'phone':
                    $rules[$field] = 'required|string|max:20';
                    $messages["{$field}.required"] = 'Phone number is required.';
                    break;
            }
        }

        // Add optional field validations
        if ($request->has('email') && !in_array('email', $config['required_fields'])) {
            $rules['email'] = 'nullable|email|max:255';
            $messages['email.email'] = 'Please enter a valid email address.';
        }

        if ($request->has('phone') && !in_array('phone', $config['required_fields'])) {
            $rules['phone'] = 'nullable|string|max:20';
        }

        if ($request->has('message')) {
            $rules['message'] = 'nullable|string|max:5000';
            $messages['message.max'] = 'Message cannot exceed 5000 characters.';
        }

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
            throw new \Illuminate\Validation\ValidationException($validator);
        }
    }

    /**
     * Verify reCAPTCHA token
     *
     * @param Request $request
     * @return bool
     */
    private function verifyRecaptcha(Request $request): bool
    {
        // Skip verification if reCAPTCHA is not enabled
        if (!$this->recaptchaService->isEnabled()) {
            return true;
        }

        $recaptchaToken = $request->input('g-recaptcha-response');
        
        if (empty($recaptchaToken)) {
            Log::warning('reCAPTCHA token missing from form submission', [
                'url' => $request->fullUrl(),
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
            return false;
        }

        // Determine action based on form type
        $action = 'submit'; // default
        $formType = $request->input('form_type');
        if ($formType) {
            $action = $formType;
        } elseif ($request->route()) {
            $routeName = $request->route()->getName();
            if ($routeName && str_contains($routeName, 'forms.')) {
                $action = str_replace('forms.', '', $routeName);
            }
        }

        return $this->recaptchaService->verify(
            $recaptchaToken,
            $request->ip(),
            $action
        );
    }
}
