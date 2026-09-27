<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New KADETECH enquiry</title>
</head>
<body style="margin: 0; background: #f6edda; color: #06162d; font-family: Arial, sans-serif;">
    <div style="max-width: 640px; margin: 32px auto; padding: 32px; background: #ffffff; border-radius: 16px;">
        <h1 style="margin: 0 0 20px; color: #06162d; font-size: 24px;">New KADETECH enquiry</h1>
        <p style="margin: 0 0 24px; color: #475569; line-height: 1.6;">A new enquiry was submitted through the KADETECH website.</p>
        <table style="width: 100%; border-collapse: collapse; line-height: 1.6;">
            <tr>
                <td style="padding: 8px 0; color: #64748b; width: 110px; vertical-align: top;">Name</td>
                <td style="padding: 8px 0; font-weight: 600;">{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; color: #64748b; vertical-align: top;">Email</td>
                <td style="padding: 8px 0; font-weight: 600;">{{ $data['email'] }}</td>
            </tr>
            @if($data['phone'])
                <tr>
                    <td style="padding: 8px 0; color: #64748b; vertical-align: top;">Phone</td>
                    <td style="padding: 8px 0; font-weight: 600;">{{ $data['phone'] }}</td>
                </tr>
            @endif
            <tr>
                <td style="padding: 8px 0; color: #64748b; vertical-align: top;">Service</td>
                <td style="padding: 8px 0; font-weight: 600;">{{ $data['service_label'] }}</td>
            </tr>
        </table>
        <h2 style="margin: 28px 0 10px; color: #06162d; font-size: 18px;">Project details</h2>
        <p style="margin: 0; color: #475569; line-height: 1.7; white-space: pre-line;">{{ $data['message'] }}</p>
        <p style="margin: 28px 0 0; color: #64748b; line-height: 1.6;">Thanks,<br>KADETECH</p>
    </div>
</body>
</html>
