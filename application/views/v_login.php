<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
        background-color: #6C757D;
        font-family: 'Poppins', sans-serif;
    }

    .container {
        display: flex;
        align-items: center;
        min-height: 100vh;
        justify-content: center;
    }

    .wrapper {
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 20px;
    }

    .login-title {
        text-align: center;
        color: white;
    }

    .login-form {
        padding: 12px;
        margin: 8px;
        display: flex;
        flex-direction: column;
    }

    .login-input {
        width: 92%;
        border: none;
        margin-bottom: 10px;
        padding: 10px;
        font-size: 18px;
    }

    .login-button {
        border-radius: 5px;
        border: none;
        padding: 12px;
        font-size: 20px;
        margin-top: 12px;
        background-color: #333;
        color: #eaeaea;
        font-weight: bolder;
        cursor: pointer;
    }

    .login-button:hover {
        background-color: #eaeaea;
        color: #333;
        transition: 0.3s ease-in-out;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <h1 class="login-title">Login</h1>
            <form action="<?php echo base_url('login/process'); ?>" method="post" class="login-form">
                <input type="text" placeholder="username" name="username" class="login-input">
                <input type="password" placeholder="***" name="password" class="login-input">
                <button type="submit" class="login-button">LOGIN</button>
            </form>
        </div>
    </div>
</body>

</html>