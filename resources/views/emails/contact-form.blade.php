<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: 'Century Gothic', CenturyGothic, AppleGothic, -apple-system, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <h2 style="color: #1a1a1a; border-bottom: 2px solid #e5e5e5; padding-bottom: 10px;">
        New Contact Form Submission
    </h2>

    <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5; font-weight: 600; width: 120px;">Name:</td>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5;">{{ $lead->name }}</td>
        </tr>
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5; font-weight: 600;">Email:</td>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5;">
                <a href="mailto:{{ $lead->email }}" style="color: #2563eb;">{{ $lead->email }}</a>
            </td>
        </tr>
        @if($lead->phone)
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5; font-weight: 600;">Phone:</td>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5;">{{ $lead->phone }}</td>
        </tr>
        @endif
        @if($lead->company)
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5; font-weight: 600;">Company:</td>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5;">{{ $lead->company }}</td>
        </tr>
        @endif
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5; font-weight: 600;">Source:</td>
            <td style="padding: 10px 0; border-bottom: 1px solid #e5e5e5;">{{ $lead->source }}</td>
        </tr>
    </table>

    <h3 style="color: #1a1a1a; margin-top: 30px;">Message:</h3>
    <div style="background: #f9fafb; padding: 15px; border-radius: 6px; white-space: pre-wrap;">{{ $lead->message }}</div>

    <p style="color: #6b7280; font-size: 12px; margin-top: 30px;">
        Submitted at {{ $lead->created_at->format('M j, Y g:i A') }}
        @if($lead->ip_address)
        from IP {{ $lead->ip_address }}
        @endif
    </p>
</body>
</html>
