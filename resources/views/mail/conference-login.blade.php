<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">

    <title>
        Conference Login
    </title>

</head>

<body style="font-family:Arial;padding:40px;background:#f8fafc;">

    <div style="
        max-width:600px;
        margin:auto;
        background:#fff;
        padding:40px;
        border-radius:20px;
    ">

        <h2 style="color:#0f172a;">
            Conference Dashboard Access
        </h2>

        <p>
            Dear {{ $user->name }},
        </p>

        <p>
            Your conference dashboard account has been created successfully.
        </p>

        <div style="
            background:#eff6ff;
            padding:25px;
            border-radius:16px;
            margin:25px 0;
        ">

            <p>
                <strong>Email:</strong>
                {{ $user->email }}
            </p>

            <p>
                <strong>Password:</strong>
                {{ $password }}
            </p>

            <p>
                <strong>Login URL:</strong>
                <a href="https://conference.fissionmonster.com/login">
                    conference.fissionmonster.com/login
                </a>
            </p>

        </div>

        <p>
            You can now login and download your conference certificate.
        </p>

        <br>

        <p>
            Regards,<br>
            Conference Team
        </p>

    </div>

</body>

</html>