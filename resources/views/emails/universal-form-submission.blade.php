<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $formName }} - New Submission</title>
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
            padding: 20px;
            border-radius: 8px 8px 0 0;
            margin: -30px -30px 30px -30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .form-data {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .field-row {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e9ecef;
        }
        .field-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .field-label {
            font-weight: bold;
            color: #495057;
            min-width: 150px;
            padding-right: 15px;
        }
        .field-value {
            flex: 1;
            color: #212529;
            word-wrap: break-word;
        }
        .system-info {
            background-color: #e9ecef;
            padding: 15px;
            border-radius: 6px;
            margin-top: 30px;
            font-size: 12px;
            color: #6c757d;
        }
        .system-info h4 {
            margin: 0 0 10px 0;
            color: #495057;
            font-size: 14px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 12px;
        }
        .highlight {
            background-color: #fff3cd;
            padding: 2px 4px;
            border-radius: 3px;
        }
        .long-text {
            white-space: pre-wrap;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #dee2e6;
            margin-top: 5px;
        }
        @media (max-width: 600px) {
            .field-row {
                flex-direction: column;
            }
            .field-label {
                min-width: auto;
                padding-right: 0;
                margin-bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>{{ $formName }}</h1>
            <p style="margin: 10px 0 0 0; font-size: 16px;">New submission received</p>
        </div>

        <div class="form-data">
            @php
                $systemInfo = null;
                $regularFields = [];
                
                foreach ($formData as $key => $value) {
                    if ($key === '_system_info') {
                        $systemInfo = $value;
                    } else {
                        $regularFields[$key] = $value;
                    }
                }
            @endphp

            @if(!empty($regularFields))
                @foreach($regularFields as $field => $value)
                    <div class="field-row">
                        <div class="field-label">{{ $field }}:</div>
                        <div class="field-value">
                            @if(strlen($value) > 100)
                                <div class="long-text">{{ $value }}</div>
                            @elseif(filter_var($value, FILTER_VALIDATE_EMAIL))
                                <a href="mailto:{{ $value }}" style="color: #007bff; text-decoration: none;">{{ $value }}</a>
                            @elseif(filter_var($value, FILTER_VALIDATE_URL))
                                <a href="{{ $value }}" target="_blank" style="color: #007bff; text-decoration: none;">{{ $value }}</a>
                            @elseif(preg_match('/^[\+]?[1-9][\d]{0,15}$/', preg_replace('/[^\d\+]/', '', $value)))
                                <a href="tel:{{ preg_replace('/[^\d\+]/', '', $value) }}" style="color: #007bff; text-decoration: none;">{{ $value }}</a>
                            @else
                                <span class="highlight">{{ $value }}</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            @else
                <p style="text-align: center; color: #6c757d; font-style: italic;">No form data received</p>
            @endif
        </div>

        @if($systemInfo)
            <div class="system-info">
                <h4>📋 Submission Details</h4>
                @foreach($systemInfo as $key => $value)
                    <div style="margin-bottom: 5px;">
                        <strong>{{ ucwords(str_replace('_', ' ', $key)) }}:</strong> {{ $value }}
                    </div>
                @endforeach
            </div>
        @endif

        <div class="footer">
            <p>
                <strong>{{ config('app.name', 'Laravel Application') }}</strong><br>
                This email was automatically generated from a form submission<br>
                Received on {{ $submissionTime->format('F j, Y \a\t g:i A T') }}
            </p>
        </div>
    </div>
</body>
</html> 