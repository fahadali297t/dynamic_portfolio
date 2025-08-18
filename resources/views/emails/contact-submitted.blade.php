<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }

        .content {
            padding: 20px 0;
        }

        .contact-details {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>Thank You for Contacting Us!</h2>
    </div>

    <div class="content">
        <p>Dear {{ $contact->name }},</p>

        <p>Thank you for reaching out to us. We have received your message and will get back to you as soon as possible.
        </p>

        <div class="contact-details">
            <h3>Your Message Details:</h3>
            <p><strong>Subject:</strong> {{ $contact->subject }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Phone:</strong> {{ $contact->phone }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contact->message }}</p>
        </div>

        <p>We typically respond within 24-48 hours during business days.</p>
        @php
            $name = \App\Models\Designer::first()->name;
        @endphp
        <p>Best regards,<br>
            {{ $name }}</p>
    </div>

    <div class="footer">
        <p>This is an automated message. Please do not reply to this email.</p>
    </div>
</body>

</html>
