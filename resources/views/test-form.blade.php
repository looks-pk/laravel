<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universal Mail System Test Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #007bff;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .test-info {
            background: #e7f3ff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 30px;
            border-left: 4px solid #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="test-info">
            <h2>🧪 Universal Mail System Test Form</h2>
            <p>This form demonstrates how ANY form fields get captured and emailed automatically. Fill out any or all fields and submit to test the system.</p>
            <p><strong>Email will be sent to:</strong> {{ config('mail.to.address', config('mail.from.address')) }}</p>
        </div>

        @if(session('success'))
            <div class="success">
                ✅ {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="error">
                ❌ {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="error">
                <strong>Please fix these errors:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/submit-quote" method="POST">
            @csrf
            <input type="hidden" name="form_type" value="test">
            <input type="hidden" name="product" value="Universal Mail System Test">

            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="form-group">
                <label for="company">Company Name</label>
                <input type="text" id="company" name="company" value="{{ old('company') }}">
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" value="{{ old('city') }}">
            </div>

            <div class="form-group">
                <label for="service_type">Service Type</label>
                <select id="service_type" name="service_type">
                    <option value="">-- Select Service --</option>
                    <option value="stair_lift" {{ old('service_type') == 'stair_lift' ? 'selected' : '' }}>Stair Lift</option>
                    <option value="bathroom_safety" {{ old('service_type') == 'bathroom_safety' ? 'selected' : '' }}>Bathroom Safety</option>
                    <option value="grab_bars" {{ old('service_type') == 'grab_bars' ? 'selected' : '' }}>Grab Bars</option>
                    <option value="ramps" {{ old('service_type') == 'ramps' ? 'selected' : '' }}>Ramps</option>
                    <option value="other" {{ old('service_type') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="urgency">Urgency Level</label>
                <select id="urgency" name="urgency">
                    <option value="normal" {{ old('urgency') == 'normal' ? 'selected' : '' }}>Normal</option>
                    <option value="urgent" {{ old('urgency') == 'urgent' ? 'selected' : '' }}>Urgent</option>
                    <option value="emergency" {{ old('urgency') == 'emergency' ? 'selected' : '' }}>Emergency</option>
                </select>
            </div>

            <div class="form-group">
                <label for="budget_range">Budget Range</label>
                <select id="budget_range" name="budget_range">
                    <option value="">-- Select Budget --</option>
                    <option value="under_1000" {{ old('budget_range') == 'under_1000' ? 'selected' : '' }}>Under $1,000</option>
                    <option value="1000_5000" {{ old('budget_range') == '1000_5000' ? 'selected' : '' }}>$1,000 - $5,000</option>
                    <option value="5000_10000" {{ old('budget_range') == '5000_10000' ? 'selected' : '' }}>$5,000 - $10,000</option>
                    <option value="over_10000" {{ old('budget_range') == 'over_10000' ? 'selected' : '' }}>Over $10,000</option>
                </select>
            </div>

            <div class="form-group">
                <label for="installation_timeframe">Installation Timeframe</label>
                <input type="text" id="installation_timeframe" name="installation_timeframe" 
                       value="{{ old('installation_timeframe') }}" 
                       placeholder="e.g., Within 2 weeks, ASAP, Next month">
            </div>

            <div class="form-group">
                <label for="special_requirements">Special Requirements / Notes</label>
                <textarea id="special_requirements" name="special_requirements" rows="4" 
                          placeholder="Any special requirements, questions, or additional information...">{{ old('special_requirements') }}</textarea>
            </div>

            <div class="form-group">
                <label for="how_did_you_hear">How did you hear about us?</label>
                <select id="how_did_you_hear" name="how_did_you_hear">
                    <option value="">-- Select Option --</option>
                    <option value="google" {{ old('how_did_you_hear') == 'google' ? 'selected' : '' }}>Google Search</option>
                    <option value="referral" {{ old('how_did_you_hear') == 'referral' ? 'selected' : '' }}>Referral</option>
                    <option value="social_media" {{ old('how_did_you_hear') == 'social_media' ? 'selected' : '' }}>Social Media</option>
                    <option value="advertisement" {{ old('how_did_you_hear') == 'advertisement' ? 'selected' : '' }}>Advertisement</option>
                    <option value="other" {{ old('how_did_you_hear') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <button type="submit">Send Test Email</button>
        </form>

        <div style="margin-top: 30px; padding: 20px; background: #f8f9fa; border-radius: 5px;">
            <h3>📧 What happens when you submit:</h3>
            <ol>
                <li>All form fields (including empty ones) are captured</li>
                <li>Field names are made human-readable (e.g., "service_type" → "Service Type")</li>
                <li>System info is added (timestamp, IP, browser, URL)</li>
                <li>A beautiful email is sent to <strong>{{ config('mail.to.address', config('mail.from.address')) }}</strong></li>
                <li>You get a success message on this page</li>
            </ol>
            
            <p><strong>Test the mail system first:</strong> <a href="/test-mail" target="_blank">Click here to test mail configuration</a></p>
        </div>
    </div>
</body>
</html> 