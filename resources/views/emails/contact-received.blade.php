<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
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
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }

        .content {
            padding: 20px 0;
        }

        .contact-info {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 15px 0;
            border-left: 4px solid #007bff;
        }

        .message-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }

        .info-row {
            display: flex;
            margin-bottom: 10px;
            align-items: center;
        }

        .info-label {
            font-weight: bold;
            min-width: 80px;
            color: #007bff;
        }

        .info-value {
            flex: 1;
        }

        .urgent {
            background-color: #fff3cd;
            border-color: #ffeaa7;
            color: #856404;
            padding: 10px;
            border-radius: 4px;
            margin: 15px 0;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #666;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }

        .action-buttons {
            text-align: center;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <div class="header">
        <h2>📧 New Contact Form Submission</h2>
        <p>You have received a new message from your website</p>
    </div>

    <div class="content">
        <div class="urgent">
            <strong>⚠️ Action Required:</strong> A new contact form has been submitted and requires your attention.
        </div>

        <div class="contact-info">
            <h3>📋 Contact Information</h3>

            <div class="info-row">
                <span class="info-label">Name:</span>
                <span class="info-value">{{ $contact->name }}</span>
            </div>

            <div class="info-row">
                <span class="info-label">Email:</span>
                <span class="info-value">
                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                </span>
            </div>

            <div class="info-row">
                <span class="info-label">Phone:</span>
                <span class="info-value">
                    <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                </span>
            </div>

            <div class="info-row">
                <span class="info-label">Subject:</span>
                <span class="info-value"><strong>{{ $contact->subject }}</strong></span>
            </div>

            <div class="info-row">
                <span class="info-label">Date:</span>
                <span class="info-value">{{ $contact->created_at->format('F j, Y \a\t g:i A') }}</span>
            </div>
        </div>

        <div class="message-box">
            <h4>💬 Message:</h4>
            <p>{{ nl2br(e($contact->message)) }}</p>
        </div>

        <div class="action-buttons">
            <a href="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject }}" class="btn">
                Reply via Email
            </a>
            <a href="tel:{{ $contact->phone }}" class="btn">
                Call Now
            </a>
        </div>

        <div style="background-color: #e7f3ff; padding: 15px; border-radius: 5px; margin-top: 20px;">
            <h4 style="margin-top: 0;">💡 Quick Actions:</h4>
            <ul style="margin: 0;">
                <li>Reply to this email to respond directly to the sender</li>
                <li>Call {{ $contact->name }} at {{ $contact->phone }}</li>
                <li>Add this contact to your CRM system</li>
            </ul>
        </div>
    </div>

    <div class="footer">
        <p>This notification was sent from Laravel </p>
        <p>Submitted on {{ $contact->created_at->format('F j, Y \a\t g:i A T') }}</p>
    </div>
</body>

</html>
