# Universal Mail System Setup Guide

This document explains how to set up and use the universal mail system for handling all form submissions on your Laravel website.

## ✅ What's Been Set Up

1. **Universal Mail Service** - Handles any form data automatically
2. **Universal Form Controller** - Processes all form submissions
3. **Universal Email Template** - Beautiful, responsive email layout
4. **Smart Form Detection** - Automatically identifies form types
5. **Multiple Form Routes** - Handles different types of forms

## 📧 SMTP Configuration

### Step 1: Update Your .env File

Add these settings to your `.env` file (create it if it doesn't exist):

```env
# Mail Configuration for Hostinger SMTP
MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=587
MAIL_USERNAME=mail@buyatcheap.com
MAIL_PASSWORD="mymailer123@mailerA"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=mail@buyatcheap.com
MAIL_FROM_NAME="Buy At Cheap"

# Where to send form submissions (can be different from FROM address)
MAIL_TO_ADDRESS=your-receiving-email@domain.com
MAIL_TO_NAME="Your Receiving Name"
```

**Important Notes:**
- `MAIL_FROM_ADDRESS` - The email that sends the messages (your SMTP account)
- `MAIL_TO_ADDRESS` - The email that receives form submissions (can be different)
- If `MAIL_TO_ADDRESS` is not set, it defaults to `MAIL_FROM_ADDRESS`

### Step 2: Test Your Mail Setup

Visit: `/test-mail` in your browser to verify everything is working.

## 🔧 How It Works

### For Any Form Submission

The system automatically:
1. Captures ALL form fields (no matter what they're named)
2. Cleans and formats the data nicely
3. Determines the form type from URL or form data
4. Sends a beautiful email with all the information
5. Includes system info (IP, timestamp, browser, etc.)

### Available Form Routes

```php
POST /submit-form              // Generic universal form
POST /submit-contact           // Contact forms
POST /submit-quote             // Quote requests
POST /submit-assessment        // Assessment forms
POST /submit-quick-contact     // Quick contact forms
POST /submit-detailed-contact  // Detailed contact forms
POST /submit-product-inquiry   // Product inquiries
POST /submit-service-request   // Service requests
```

## 📝 Using the Universal Form System

### Example 1: Simple Contact Form

```html
<form action="/submit-contact" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <input type="tel" name="phone" placeholder="Your Phone">
    <textarea name="message" placeholder="Your Message"></textarea>
    <button type="submit">Send Message</button>
</form>
```

### Example 2: Product Inquiry Form

```html
<form action="/submit-product-inquiry" method="POST">
    @csrf
    <input type="hidden" name="product" value="Stair Lift Model XYZ">
    <input type="text" name="customer_name" placeholder="Your Name" required>
    <input type="email" name="customer_email" placeholder="Your Email" required>
    <input type="tel" name="customer_phone" placeholder="Your Phone">
    <input type="text" name="installation_address" placeholder="Installation Address">
    <select name="urgency">
        <option value="normal">Normal</option>
        <option value="urgent">Urgent</option>
    </select>
    <textarea name="special_requirements" placeholder="Special Requirements"></textarea>
    <button type="submit">Request Quote</button>
</form>
```

### Example 3: Assessment Form with Multiple Fields

```html
<form action="/submit-assessment" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="First Name" required>
    <input type="text" name="last_name" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="phone" placeholder="Phone" required>
    <input type="text" name="city" placeholder="City">
    <select name="mobility_needs">
        <option value="mild">Mild assistance needed</option>
        <option value="moderate">Moderate assistance needed</option>
        <option value="significant">Significant assistance needed</option>
    </select>
    <input type="checkbox" name="has_stairs" value="yes"> Has stairs
    <input type="checkbox" name="wheelchair_user" value="yes"> Wheelchair user
    <textarea name="additional_info" placeholder="Additional Information"></textarea>
    <button type="submit">Schedule Assessment</button>
</form>
```

## 🎨 Email Features

The email template automatically:
- ✅ Makes field names human-readable (`first_name` → `First Name`)
- ✅ Detects email addresses and makes them clickable
- ✅ Detects phone numbers and makes them clickable
- ✅ Detects URLs and makes them clickable
- ✅ Handles long text with proper formatting
- ✅ Groups system information separately
- ✅ Uses responsive design for mobile devices

## 🔍 Smart Form Detection

The system automatically detects form types based on:

1. **URL patterns**: `/quote`, `/assessment`, `/product`, etc.
2. **Form fields**: `product`, `service`, `form_type`
3. **Location**: Area-specific forms get city information

### Automatic Customization Examples:

- Quote forms → "Thank you for your quote request! We will contact you within 24 hours."
- Product pages → "Thank you for your product inquiry! We will contact you with details."
- City-specific → "Our [City] team will contact you within 24 hours."

## 📋 Updating Existing Forms

To convert your existing forms:

1. **Change the action**: Point to one of the universal routes
2. **Keep all your fields**: No need to change field names
3. **Add CSRF token**: Include `@csrf` if not already present
4. **Test**: Submit and check the email

### Before:
```html
<form action="#" method="POST" onsubmit="alert('Thank you!')">
```

### After:
```html
<form action="/submit-quote" method="POST">
    @csrf
```

## 🛡️ Security Features

- ✅ CSRF protection on all forms
- ✅ Input validation based on form type
- ✅ XSS protection in email templates
- ✅ IP and browser tracking for security
- ✅ Error logging for debugging

## 🎯 Advanced Usage

### Custom Form Configuration

You can override default settings by adding hidden fields:

```html
<input type="hidden" name="form_type" value="custom">
<input type="hidden" name="email_subject" value="Custom Subject">
<input type="hidden" name="success_message" value="Custom success message">
```

### Different Receiving Emails

You can send different form types to different email addresses:

#### Option 1: Set different default in .env
```env
MAIL_TO_ADDRESS=forms@yourdomain.com    # All forms go here
MAIL_FROM_ADDRESS=noreply@yourdomain.com # Sender address
```

#### Option 2: Override per form type in controller
```php
// In UniversalFormController.php, add 'to' field:
if (str_contains($url, 'quote')) {
    $config['to'] = 'sales@yourdomain.com';
} elseif (str_contains($url, 'support')) {
    $config['to'] = 'support@yourdomain.com';
}
```

### AJAX Forms

The system supports AJAX submissions:

```javascript
fetch('/submit-contact', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
    },
    body: JSON.stringify(formData)
})
.then(response => response.json())
.then(data => {
    if (data.success) {
        alert(data.message);
    } else {
        console.error(data.errors);
    }
});
```

## 🚀 Testing

1. **Visit `/test-mail`** to test email functionality
2. **Visit `/test-form`** to test the complete form system
3. **Submit a test form** to see the complete flow
4. **Check your email** for the formatted message
5. **Review logs** in `storage/logs/laravel.log` if issues occur

## 📞 Troubleshooting

### Common Issues:

1. **Emails not sending**: Check `.env` mail settings
2. **Wrong recipient**: Verify `MAIL_TO_ADDRESS` in .env
3. **CSRF errors**: Ensure `@csrf` is in your forms
4. **Form not submitting**: Check the action URL matches your routes
5. **Fields missing**: All form fields are automatically included

### Debug Steps:

1. Check `/test-mail` route works
2. Verify `.env` file has correct SMTP settings
3. Clear config cache: `php artisan config:clear`
4. Check `storage/logs/laravel.log` for errors
5. Test with a simple form first

## 🎉 Benefits

- ✅ **Universal**: Works with ANY form structure
- ✅ **Automatic**: No manual field mapping needed
- ✅ **Beautiful**: Professional email templates
- ✅ **Smart**: Context-aware responses
- ✅ **Secure**: Built-in protection
- ✅ **Maintainable**: One system for all forms
- ✅ **Scalable**: Add new forms without code changes
- ✅ **Flexible**: Different recipients for different form types

Your universal mail system is now ready to handle all 100+ forms on your website! 🚀 