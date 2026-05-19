<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Conference Registration Received</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:'Segoe UI', Arial, sans-serif;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="padding:30px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
                    <tr>
                        <td align="center" style="background-color:#004aad; padding:25px 15px;">
                            <h1 style="color:#ffffff; font-size:26px; margin:0; font-weight:600;">🕒 Registration Pending Verification</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;">
                            <p style="font-size:16px; color:#333; margin-bottom:20px;">  Dear <strong>{{ trim($first_name . ' ' . $father_name) }}</strong>,</p>

                            <p style="font-size:16px; color:#333; line-height:1.6;">
                                Thank you for registering for the 
                                <strong style="color:#004aad;">Face By Surgeons</strong>!
                            </p>

                            <p style="font-size:16px; color:#333; line-height:1.6;">
                                Your registration has been successfully received and is currently 
                                <strong style="color:#004aad;">pending verification</strong> by our team.
                                You will receive a confirmation email once your registration and payment (if applicable) have been verified.
                            </p>

                            <div style="margin:25px 0;">
                                <h3 style="color:#004aad; border-bottom:2px solid #eee; padding-bottom:5px;">Registration Summary:</h3>
                                <table cellpadding="6" cellspacing="0" width="100%" style="font-size:15px; color:#444;">
                                    <tr>
                                        <td width="35%" style="font-weight:600;">Name:</td>
                                        <td>{{ $first_name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:600;">Email:</td>
                                        <td>{{ $email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:600;">Phone:</td>
                                        <td>{{ $phone_number }}</td>
                                    </tr>
                                </table>
                            </div>

                            <p style="font-size:16px; color:#333; line-height:1.6;">
                                Please do not reply to this email. If you have any questions, you may contact our support team at 
                                <a href="mailto:marketing@iadsr.edu.pk" style="color:#004aad; text-decoration:none;">marketing@iadsr.edu.pk</a>.
                            </p>

                            <div style="text-align:center; margin-top:30px;">
                                <a href="https://conference.fissionmonster.com" style="background-color:#004aad; color:#ffffff; text-decoration:none; padding:12px 30px; border-radius:30px; font-weight:600; display:inline-block;">
                                    Visit Conference Website
                                </a>
                            </div>

                            <p style="margin-top:30px; font-size:15px; color:#555;">
                                Best Regards,<br>
                                <strong>Face By Surgeons Team</strong><br>
                                <a href="https://conference.fissionmonster.com" style="color:#004aad; text-decoration:none;">conference.fissionmonster.com</a>
                            </p>
                        </td>
                    </tr>
                     <!-- Partner Logos Section -->
          
                    <tr>
                        <td align="center" style="background-color:#fafafa; padding:15px;">
                            <p style="font-size:12px; color:#888; margin:0;">© {{ date('Y') }} IADSR. All rights reserved Design and Develop By <a href="https://fissionmonster.com">Fission Monster</a>.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
