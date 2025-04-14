<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Approved</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="margin: 0; padding: 30px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 40px;">
                    <tr>
                        <td align="center" style="padding-bottom: 20px;">
                            <h1 style="color: #28a745; margin: 0;">🎉 Seller Approved!</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #333333; font-size: 16px; line-height: 1.6;">
                            <p>Dear Seller,</p>
                            <p>Your account has been approved by the admin. You can now access your dashboard using the following credentials:</p>
                            <p><strong>Email:</strong> {{ $data['email'] }}</p>
                            <p><strong>Password:</strong> {{ $data['password'] }}</p>
                            <p style="margin-top: 30px;">
                                <a href="{{ url('/seller') }}" style="background-color: #007bff; color: #ffffff; padding: 12px 25px; border-radius: 5px; text-decoration: none;">Login to Dashboard</a>
                            </p>
                            <p style="margin-top: 40px; font-size: 14px; color: #777777;">
                                If you have any questions, feel free to contact our support team.
                            </p>
                            <p style="font-size: 13px; color: #bbbbbb;">This is an automated message. Please do not reply.</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-top: 20px;">
                            <p style="font-size: 12px; color: #999999;">© {{ date('Y') }} SmartEdu. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
