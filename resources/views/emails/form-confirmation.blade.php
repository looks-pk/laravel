<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We received your request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .email-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 30px 20px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 30px -30px;
            text-align: center;
        }
        .header h1 {
            margin: 0 0 8px 0;
            font-size: 26px;
        }
        .header p {
            margin: 0;
            font-size: 15px;
            opacity: 0.9;
        }
        .checkmark {
            font-size: 48px;
            display: block;
            margin-bottom: 12px;
        }
        .greeting {
            font-size: 18px;
            font-weight: bold;
            color: #212529;
            margin-bottom: 12px;
        }
        .message-box {
            background-color: #f0f7ff;
            border-left: 4px solid #007bff;
            padding: 16px 20px;
            border-radius: 0 8px 8px 0;
            margin: 24px 0;
            color: #1a3a5c;
            font-size: 15px;
        }
        .next-steps {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 24px 0;
        }
        .next-steps h3 {
            margin: 0 0 12px 0;
            font-size: 16px;
            color: #495057;
        }
        .next-steps ul {
            margin: 0;
            padding-left: 20px;
            color: #495057;
        }
        .next-steps ul li {
            margin-bottom: 6px;
        }
        .contact-info {
            text-align: center;
            margin: 24px 0;
            padding: 16px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .contact-info p {
            margin: 4px 0;
            font-size: 14px;
            color: #495057;
        }
        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">

        <div class="header">
            <span class="checkmark">✅</span>
            <h1>Request Received!</h1>
            <p>Thank you for reaching out to us</p>
        </div>

        <p class="greeting">Hi {{ $submitterName }},</p>

        <p>Thank you for submitting your <strong>{{ $formName }}</strong>. We have successfully received your request and one of our team members will be in touch with you shortly.</p>

        <div class="message-box">
            🕐 <strong>Expected response time:</strong> We typically respond within <strong>24 hours</strong> during business hours (Monday – Friday, 9 AM – 5 PM).
        </div>

        <div class="next-steps">
            <h3>What happens next?</h3>
            <ul>
                <li>Our team will review the details you provided.</li>
                <li>A specialist will reach out to you via phone or email.</li>
                <li>We will discuss your needs and recommend the best solution.</li>
            </ul>
        </div>

        <p>If you have any urgent questions in the meantime, feel free to contact us directly:</p>

        <div class="contact-info">
            <p>📧 <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></p>
            <p>🌐 <a href="{{ config('app.url') }}">{{ config('app.url') }}</a></p>
        </div>

        <p style="color: #6c757d; font-size: 14px;">Please do not reply to this email as it is sent from an automated system. Use the contact details above to reach us directly.</p>

        <div class="footer">
            <p>
                <strong>{{ config('app.name') }}</strong><br>
                This is an automated confirmation — no action required on your part.<br>
                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
            </p>
        </div>

    </div>
</body>
</html>
