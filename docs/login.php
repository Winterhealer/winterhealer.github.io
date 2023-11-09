<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }


        .background::before {
        content: "";
        background-image: linear-gradient(rgba(0, 0, 0, 0.63), rgba(0, 0, 0, 0.623)),
            url(image/network_infra.jpg);
        position: fixed;
        background-attachment: scroll;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        filter: blur(10px);
        margin: -20px; /* this very 666 */
        z-index: -1;
        }

        .login-box {
            background: #ffffff;
            width: 75%;
            height: 75%;
            display: flex;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .login-left {
            flex: 2;
            background: url('image/network_infra.jpg') center/cover;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .login-right {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .logo {
            width: 400px;
            height: auto;
            margin-top: -100px;
            margin-bottom: 70px; /* Increased distance between logo and text */
        }

        .welcome-text {
            margin-bottom: 40px;
            font-size: 32px;
            font-weight: bold;
            color: #333;

        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form .separator-line {
            width: 100%;
            height: 1px;
            background-color: #ccc;
            margin: 20px 0;
        }

        .login-form button {
            margin-top: 30px;
            width: 150px; /* Width set for oval shape */
            padding: 10px;
            border: none;
            border-radius: 25px; /* Half of the height to create an oval shape */
            background-color: #777;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #999;
        }

        .input-group {
            margin-bottom: 00px;
        }

        .input-group label {
            font-size: 16px;
            margin-bottom: 10px;
            display: block;
            margin-bottom: 0px;
            color: #777;
        }

        .input-group input[type="email"],
        .input-group input[type="password"] {
            width: calc(100% - 20px); /* Adjust width based on your design */
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .input-group input[type="email"]:hover,
        .input-group input[type="password"]:hover {
            border-color: #42F3FA;
        }

        .input-group input[type="email"]:focus,
        .input-group input[type="password"]:focus {
            border-color: #42F3FA;
        }

        .input-group input[type="email"],
        .input-group input[type="password"] {
            width: calc(100% - 20px); /* Adjust width based on your design */
            margin-bottom: 10px;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc; /* Bottom border only */
            border-radius: 0;
            background: transparent; /* Make background transparent */
        }

        .input-group input[type="email"]:hover,
        .input-group input[type="password"]:hover {
            border-bottom: 1px solid #42F3FA; /* Hover effect for bottom border */
        }

        .input-group input[type="email"]:focus,
        .input-group input[type="password"]:focus {
            border-bottom: 1px solid #42F3FA; /* Focus effect for bottom border */
        }

        .horizontal-line {
        border-top: 1px solid black;
        width: 100%;
        text-align: center;
        color: white;
        font-size: 20px;
        font-weight: bold;
        }
        
        .divider {
            display: flex;
            align-items: center;
            text-align: center;
        }

        .divider hr {
            flex: 1;
            border: 0.5px solid #ccc;
        }

        .divider-text {
            padding: 0 10px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="background"></div>
    <div class="login-box">
        <div class="login-left"></div>
        <div class="login-right">
            <img src="image/pasti_logo.jpg" alt="Company Logo" class="logo">
            <div class="welcome-text">Welcome to Pasti Nyala</div>
            <div class="login-form" id="login-form">
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                </div>
                <button type="submit">Sign In</button>
                <!-- <button class="button google">Sign in with Google</button> -->
            </div>
            <hr>
            <div class="divider">or</div>
            <hr>
        </div>
    </div>
</div
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>r
</body>

</html>
