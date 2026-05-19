<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Conference Confirmation</title>
</head>
<body style="margin:0; padding:0; background-color:#f2f2f2; font-family:Arial, Helvetica, sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" bgcolor="#f2f2f2">
    <tr>
      <td align="center">

        <!-- Outer Container -->
        <table width="650" cellpadding="0" cellspacing="0" bgcolor="#ffffff" 
               style="margin:20px auto; border-radius:8px; border:1px solid #ddd; overflow:hidden;">

          <!-- Header -->
          <tr>
            <td bgcolor="#FFF" style="padding:30px; text-align:center;">
              <img src="https://conference.fissionmonster.com/congress_logo.png" alt="[Organization Name]" style="max-height:80px;">
              <h1 style="color:#d4af37; font-size:24px; margin:15px 0 0; font-weight:bold;">
                Conference Registration Confirmed
              </h1>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:30px 25px; color:#333; font-size:15px; line-height:1.6;">
              <p>Dear <strong>{{$candidate['name']}} {{$candidate['father_name']}}</strong>,</p>

              <p>We are delighted to confirm your registration for the 
                <strong style="color:#0a1a2f;">Face By Surgeons</strong>. 
                Your participation adds great value, and we look forward to welcoming you.
              </p>

              <!-- Details Box -->
              <table width="100%" cellpadding="10" cellspacing="0" 
                     style="background:#fafafa; border:1px solid #e0e0e0; border-radius:6px; margin:20px 0;">
                <tr>
                  <td width="35%" style="color:#0a1a2f; font-weight:bold;">Conference:</td>
                  <td>Face By Surgeons Conference</td>
                </tr>
                <tr>
                  <td style="color:#0a1a2f; font-weight:bold;">Date:</td>
                  <td>15-16 May 2026</td>
                </tr>
                <tr>
                  <td style="color:#0a1a2f; font-weight:bold;">Venue:</td>
                  <td>Shaikh Zayed Hospital Lahore</td>
                </tr>
                <tr>
                  <td style="color:#0a1a2f; font-weight:bold;">Registration ID:</td>
                  <td>{{$candidate['cn_register_no']}}</td>
                </tr>
              </table>

              <p>Please keep this email as proof of registration. Entry badges and event materials will be provided at check-in.</p>

              
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td bgcolor="#0a1a2f" style="padding:25px; text-align:center; font-size:13px; color:#ddd;">
              <p>If you have any questions, please contact us at 
                <a href="mailto:marketing@iadsr.edu.pk" style="color:#d4af37; text-decoration:none;">
                  marketing@iadsr.edu.pk
                </a>.
              </p>
              <p style="margin-top:15px; color:#ffffff;">
                <strong>Face Congress 2026</strong><br>
               
              </p>
            </td>
          </tr>

        </table>
        <!-- End Outer Container -->

      </td>
    </tr>
  </table>

</body>
</html>


