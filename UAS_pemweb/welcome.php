<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
        }

        .container {
            text-align: center;
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
        }

        .logo {
            margin: 20px auto;
            width: 150px;
            height: 150px;
        }

        .button-container {
            margin-top: 20px;
        }

        .button-container a {
            display: inline-block;
            text-decoration: none;
            font-size: 16px;
            padding: 10px 20px;
            border-radius: 5px;
            color: #ffffff;
            margin: 5px;
        }

        .button-container .pendaftaran {
            background-color: #007bff;
        }

        .button-container .login {
            background-color: #28a745;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang</h1>
        <img src="Logo_ITERA.png" alt="Logo" class="logo">
        <div class="button-container">
            <a href="pendaftaran/register_form.html" class="pendaftaran">Sign Up</a>
            <a href="login.php" class="login">Login</a>
        </div>
    </div>
</body>
</html>
