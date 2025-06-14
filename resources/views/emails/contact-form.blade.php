<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    @if(isset($data['phone']))
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    @endif
    @if(isset($data['service']))
    <p><strong>Service:</strong> {{ $data['service'] }}</p>
    @endif
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
</body>
</html> 