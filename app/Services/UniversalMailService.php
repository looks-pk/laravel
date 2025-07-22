<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\UniversalFormSubmission;

class UniversalMailService
{
    /**
     * Send email for any form submission
     *
     * @param array $formData Raw form data from request
     * @param array $options Optional configuration
     * @return bool
     */
    public function sendFormSubmission(array $formData, array $options = []): bool
    {
        try {
            // Default configuration
            $config = array_merge([
                'to' => config('mail.to.address', config('mail.from.address', 'mail@buyatcheap.com')),
                'subject' => 'New Form Submission',
                'form_name' => 'Contact Form',
                'include_system_info' => true,
            ], $options);

            // Clean and prepare form data
            $cleanedData = $this->cleanFormData($formData);
            
            // Add system information if requested
            if ($config['include_system_info']) {
                $cleanedData['_system_info'] = [
                    'submission_time' => now()->format('Y-m-d H:i:s'),
                    'user_ip' => request()->ip(),
                    'user_agent' => request()->userAgent(),
                    'url' => request()->fullUrl(),
                    'referrer' => request()->header('referer'),
                ];
            }

            // Send email
            Mail::to($config['to'])->send(new UniversalFormSubmission([
                'form_data' => $cleanedData,
                'form_name' => $config['form_name'],
                'subject' => $config['subject'],
            ]));

            return true;
        } catch (\Exception $e) {
            \Log::error('Universal Mail Service Error: ' . $e->getMessage(), [
                'form_data' => $formData,
                'options' => $options,
                'exception' => $e,
            ]);
            
            return false;
        }
    }

    /**
     * Clean and organize form data
     *
     * @param array $formData
     * @return array
     */
    private function cleanFormData(array $formData): array
    {
        $cleaned = [];
        $excludeFields = ['_token', '_method', 'g-recaptcha-response'];

        foreach ($formData as $key => $value) {
            // Skip Laravel internal fields and common spam protection fields
            if (in_array($key, $excludeFields)) {
                continue;
            }

            // Skip empty values (but keep 0 and false)
            if ($value === '' || $value === null) {
                continue;
            }

            // Convert field names to human readable format
            $cleanKey = $this->formatFieldName($key);
            
            // Handle different value types
            if (is_array($value)) {
                $cleaned[$cleanKey] = $this->formatArrayValue($value);
            } else {
                $cleaned[$cleanKey] = $this->formatValue($value);
            }
        }

        return $cleaned;
    }

    /**
     * Format field name to human readable
     *
     * @param string $fieldName
     * @return string
     */
    private function formatFieldName(string $fieldName): string
    {
        // Convert snake_case and kebab-case to Title Case
        $formatted = str_replace(['_', '-'], ' ', $fieldName);
        $formatted = ucwords(strtolower($formatted));
        
        // Handle common field name patterns
        $replacements = [
            'First Name' => 'First Name',
            'Last Name' => 'Last Name',
            'Email' => 'Email Address',
            'Phone' => 'Phone Number',
            'Zip' => 'ZIP Code',
            'Postal Code' => 'Postal Code',
            'Dob' => 'Date of Birth',
            'Ssn' => 'SSN',
            'Id' => 'ID',
            'Url' => 'URL',
            'Api' => 'API',
        ];

        return $replacements[$formatted] ?? $formatted;
    }

    /**
     * Format a single value
     *
     * @param mixed $value
     * @return string
     */
    private function formatValue($value): string
    {
        if (is_bool($value)) {
            return $value ? 'Yes' : 'No';
        }

        if (is_numeric($value)) {
            return (string) $value;
        }

        // Truncate very long values
        if (strlen($value) > 1000) {
            return substr($value, 0, 997) . '...';
        }

        return (string) $value;
    }

    /**
     * Format array values
     *
     * @param array $value
     * @return string
     */
    private function formatArrayValue(array $value): string
    {
        if (empty($value)) {
            return 'None selected';
        }

        // If it's a simple indexed array, join with commas
        if (array_keys($value) === range(0, count($value) - 1)) {
            return implode(', ', $value);
        }

        // If it's an associative array, format as key: value pairs
        $formatted = [];
        foreach ($value as $k => $v) {
            $formatted[] = $this->formatFieldName($k) . ': ' . $this->formatValue($v);
        }

        return implode("\n", $formatted);
    }

    /**
     * Send notification email with custom template
     *
     * @param array $formData
     * @param string $template
     * @param array $options
     * @return bool
     */
    public function sendCustomNotification(array $formData, string $template, array $options = []): bool
    {
        try {
            $config = array_merge([
                'to' => config('mail.to.address', config('mail.from.address')),
                'subject' => 'New Notification',
            ], $options);

            Mail::to($config['to'])->send(new \App\Mail\CustomFormNotification([
                'form_data' => $formData,
                'template' => $template,
                'subject' => $config['subject'],
                'options' => $config,
            ]));

            return true;
        } catch (\Exception $e) {
            \Log::error('Custom Mail Notification Error: ' . $e->getMessage());
            return false;
        }
    }
} 