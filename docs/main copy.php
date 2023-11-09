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
            background-color: #ccc;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* .login-form button:hover {
            background-color: #999;
        } */

        .input-group {
            margin-bottom: 00px;
        }

        .input-group label {
            font-size: 16px;
            display: block;
            margin-bottom: -10px;
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
/* Hover effect for bottom border */
        .input-group input[type="email"]:hover,
        .input-group input[type="password"]:hover {
            border-bottom: 1px solid #42F3FA; 
        }
/* Focus effect for bottom border */
        .input-group input[type="email"]:focus,
        .input-group input[type="password"]:focus {
            border-bottom: 1px solid #42F3FA; 
        }


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
    /* ... (your existing background styles) ... */
}

.login-box {
    /* ... (your existing login-box styles) ... */
}

.login-right .title {
    font-size: 36px;
    font-weight: bold;
    color: #ed2553;
    margin-bottom: 40px;
}

.input-container {
    position: relative;
    margin: 0 0 50px;
}

input {
    /* ... (your existing input styles) ... */
    border: none;
    border-bottom: 1px solid #ccc;
    outline: none;
}

input:focus ~ label, input:not(:placeholder-shown) ~ label {
    color: #ed2553;
    transform: translate(0, -50%) scale(0.75);
}

label {
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    transition: 0.3s ease;
    color: #777;
}

.bar {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background-color: #ccc;
}

.bar:before, .bar:after {
    content: "";
    position: absolute;
    width: 0;
    height: 2px;
    background-color: #ed2553;
    transition: 0.3s ease;
}

input:focus ~ .bar:before, input:focus ~ .bar:after,
input:not(:placeholder-shown) ~ .bar:before, input:not(:placeholder-shown) ~ .bar:after {
    width: 50%;
}
    </style>
</head>

<!DOCTYPE html>
<html>
<head>
  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
</head>
<body>
  <div id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>
</html>

