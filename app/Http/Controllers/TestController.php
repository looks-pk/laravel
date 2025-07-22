<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function simple()
    {
        return "✅ Controller test route is working! Time: " . now()->format('Y-m-d H:i:s');
    }

    public function mail()
    {
        try {
            $mailService = new \App\Services\UniversalMailService();
            
            $testData = [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'phone' => '123-456-7890',
                'message' => 'This is a test email to verify the mail system is working correctly.',
                'test_field' => 'This demonstrates how any form field gets included',
            ];
            
            $result = $mailService->sendFormSubmission($testData, [
                'subject' => 'Mail System Test',
                'form_name' => 'Mail Test Form',
                'to' => config('mail.to.address', config('mail.from.address')),
            ]);
            
            if ($result) {
                return "✅ Mail system is working! Test email sent to " . config('mail.to.address', config('mail.from.address'));
            } else {
                return "❌ Mail system failed. Check logs for details.";
            }
        } catch (\Exception $e) {
            return "❌ Mail test failed: " . $e->getMessage();
        }
    }
} 