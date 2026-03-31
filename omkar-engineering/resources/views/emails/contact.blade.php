<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Message</title>
</head>

<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f4f4f4;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:20px;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 0 10px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#2c3e50; color:#ffffff; padding:20px; text-align:center;">
                            <h2 style="margin:0;">Omkar Engineering & Fabrication</h2>
                            <p style="margin:5px 0 0;">New Contact Message</p>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:20px; color:#333;">

                            <p><strong>Name:</strong> {{ $name }}</p>
                            <p><strong>Email:</strong> {{ $email }}</p>
                            <p><strong>Phone:</strong> {{ $phone }}</p>
                            <p><strong>Subject:</strong> {{ $subject }}</p>

                            <p><strong>Message:</strong></p>
                            <p style="background:#f9f9f9; padding:15px; border-radius:5px;">
                                {{ $messageContent }}
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f1f1; text-align:center; padding:15px; font-size:12px; color:#777;">
                            © {{ date('Y') }} Omkar Engineering & Fabrication. All rights reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
