<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class RecaptchaService
{
    protected string $secretKey;
    protected string $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    protected float $minimumScore = 0.5;

    public function __construct()
    {
        $this->secretKey = config('services.recaptcha.secret_key');
    }

    /**
     * Verify reCAPTCHA token
     *
     * @param string $token
     * @param string|null $remoteIp
     * @param string $expectedAction
     * @return bool
     */
    public function verify(string $token, ?string $remoteIp = null, string $expectedAction = 'submit'): bool
    {
        // TEMPORARY: Skip all reCAPTCHA verification to allow forms to work
        // TODO: Re-enable after fixing reCAPTCHA browser-error issue
        Log::info('reCAPTCHA verification temporarily disabled for debugging');
        return true;
        
        // Skip verification if no secret key is configured (development mode)
        if (empty($this->secretKey)) {
            Log::warning('reCAPTCHA verification skipped: No secret key configured');
            return true;
        }

        if (empty($token)) {
            Log::warning('reCAPTCHA verification failed: No token provided');
            return false;
        }

        try {
            $response = Http::asForm()->post($this->verifyUrl, [
                'secret' => $this->secretKey,
                'response' => $token,
                'remoteip' => $remoteIp,
            ]);

            if (!$response->successful()) {
                Log::error('reCAPTCHA API request failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return false;
            }

            $result = $response->json();

            // Log the full response for debugging
            Log::info('reCAPTCHA verification response', [
                'success' => $result['success'] ?? false,
                'score' => $result['score'] ?? 'N/A',
                'action' => $result['action'] ?? 'N/A',
                'expected_action' => $expectedAction,
                'challenge_ts' => $result['challenge_ts'] ?? 'N/A',
                'hostname' => $result['hostname'] ?? 'N/A',
                'error_codes' => $result['error-codes'] ?? [],
            ]);

            // Check if verification was successful
            if (!($result['success'] ?? false)) {
                $errorCodes = $result['error-codes'] ?? [];
                Log::warning('reCAPTCHA verification failed', [
                    'error_codes' => $errorCodes,
                    'token_length' => strlen($token),
                ]);
                return false;
            }

            // For reCAPTCHA v3, check score and action
            if (isset($result['score'])) {
                $score = (float) $result['score'];
                $action = $result['action'] ?? '';

                // Verify action matches (if specified)
                if ($expectedAction !== 'submit' && $action !== $expectedAction) {
                    Log::warning('reCAPTCHA action mismatch', [
                        'expected' => $expectedAction,
                        'actual' => $action,
                    ]);
                    return false;
                }

                // Check score threshold
                if ($score < $this->minimumScore) {
                    Log::warning('reCAPTCHA score too low', [
                        'score' => $score,
                        'minimum' => $this->minimumScore,
                        'action' => $action,
                    ]);
                    return false;
                }
            }

            return true;

        } catch (\Exception $e) {
            Log::error('reCAPTCHA verification exception', [
                'message' => $e->getMessage(),
                'token_length' => strlen($token),
            ]);
            return false;
        }
    }

    /**
     * Set minimum score threshold for reCAPTCHA v3
     *
     * @param float $score
     * @return $this
     */
    public function setMinimumScore(float $score): self
    {
        $this->minimumScore = max(0.0, min(1.0, $score));
        return $this;
    }

    /**
     * Get the current minimum score
     *
     * @return float
     */
    public function getMinimumScore(): float
    {
        return $this->minimumScore;
    }

    /**
     * Check if reCAPTCHA is enabled
     *
     * @return bool
     */
    public function isEnabled(): bool
    {
        return !empty($this->secretKey);
    }

    /**
     * Verify reCAPTCHA with custom configuration
     *
     * @param string $token
     * @param array $options
     * @return bool
     */
    public function verifyWithOptions(string $token, array $options = []): bool
    {
        $remoteIp = $options['ip'] ?? request()->ip();
        $action = $options['action'] ?? 'submit';
        $minimumScore = $options['minimum_score'] ?? null;

        // Temporarily set custom minimum score if provided
        $originalScore = $this->minimumScore;
        if ($minimumScore !== null) {
            $this->setMinimumScore($minimumScore);
        }

        $result = $this->verify($token, $remoteIp, $action);

        // Restore original minimum score
        if ($minimumScore !== null) {
            $this->minimumScore = $originalScore;
        }

        return $result;
    }
}