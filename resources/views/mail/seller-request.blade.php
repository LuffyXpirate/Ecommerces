<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller Request Notification</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background-color: #f4f4f4;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <!-- Header -->
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #007bff; border-top-left-radius: 8px; border-top-right-radius: 8px;">
                <h1 style="margin: 0; font-size: 24px; color: #ffffff;">New Seller Request</h1>
            </td>
        </tr>
        <!-- Content -->
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 16px; color: #333333; line-height: 1.6; margin: 0 0 20px;">
                    Dear Admin,
                </p>
                <p style="font-size: 16px; color: #333333; line-height: 1.6; margin: 0 0 20px;">
                    You have received a new seller request with the following details:
                </p>
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="font-size: 16px; color: #333333;">
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold; width: 30%;">Name:</td>
                        <td style="padding: 10px 0;">{{ $data['name'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Email:</td>
                        <td style="padding: 10px 0;">{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-weight: bold;">Contact:</td>
                        <td style="padding: 10px 0;">{{ $data['phone'] }}</td>
                    </tr>
                </table>
                <p style="font-size: 16px; color: #333333; line-height: 1.6; margin: 20px 0;">
                    Please review the request at your earliest convenience.
                </p>
                <!-- Button -->
                <table role="presentation" cellspacing="0" cellpadding="0" style="margin: 20px auto;">
                    <tr>
                        <td style="border-radius: 5px; background-color: #007bff;">
                            <a href="{{ url('/admin') }}"
                            style="display: inline-block; padding: 12px 24px; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 5px;">View Request</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Footer -->
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #f8f9fa; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                <p style="font-size: 14px; color: #666666; margin: 0;">
                    This is an automated notification. Please do not reply directly to this email.
                </p>
                <p style="font-size: 14px; color: #666666; margin: 10px 0 0;">
                    &copy; {{ date('Y') }} Your Company Name. All rights reserved.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>