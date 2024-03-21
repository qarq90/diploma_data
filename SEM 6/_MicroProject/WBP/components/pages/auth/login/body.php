<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>eco eco | Login</title>
    <link href="../../styles/globals.css" rel="stylesheet">
    <link href="../../styles/auth.css" rel="stylesheet">
</head>

<body>
    <div class="hidden auth-container">
        <div class="hidden login-container">
            <form action="../../php/auth/login/script.php" class="hidden login-form" method="post" onsubmit="return validateLogin()">
                <div class="hidden container-type" id="auth-type">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" style="fill: #cccccc" />
                    </svg>
                    <h1>Login</h1>
                </div>
                <p class="hidden error" id="error"></p>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="errorDB"><?php echo $_GET['error'] ?></p>
                <?php } ?>
                <label class="hidden input-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" style="fill: #cccccc" />
                    </svg>
                    Email ID
                </label>
                <label>
                    <input name="email" placeholder="Email ID" type="text" id="email">
                </label>
                <label class="hidden input-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" style="fill: #cccccc" />
                    </svg>
                    Password
                </label>
                <label>
                    <input name="password" placeholder="Password" type="password" id="password">
                </label>
                <button type="submit" value="submit">Login</button>
                <a href="signup_page.php">Don't have an account? Create one now!</a>
            </form>
        </div>
        <div class="hidden login-container">
            <form class="hidden login-form">
                <img src="../../images/auth/login.jpg" alt="not-found">
            </form>
        </div>
    </div>
    <script src="../../scripts/animateDynamically.js"></script>
    <script src="../../scripts/authValidate.js"></script>
</body>

</html>