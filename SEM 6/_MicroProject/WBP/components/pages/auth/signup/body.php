<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>eco eco | Sign Up</title>
    <link href="../../styles/globals.css" rel="stylesheet">
    <link href="../../styles/auth.css" rel="stylesheet">
</head>

<body>
    <div class="hidden auth-container">
        <div class="hidden login-container">
            <form class="hidden login-form">
                <img alt="not-found" src="../../images/auth/signup.jpg">
            </form>
        </div>
        <div class="hidden login-container">
            <form action="../../php/auth/signup/script.php" class="hidden login-form" method="post" onsubmit="return validateSignup()">
                <div class="hidden container-type" id="auth-type">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" style="fill: #cccccc" />
                    </svg>
                    <h1>Sign Up</h1>
                </div>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="hidden errorSignUp"><?php echo $_GET['error'] ?></p>
                <?php } ?>
                <p class="hidden error" id="error"></p>
                <label class="hidden input-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" style="fill: #cccccc" />
                    </svg>
                    User Name
                </label>
                <label>
                    <input name="username" placeholder="User Name" type="text" id="username">
                </label>
                <label class="hidden input-title">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" style="fill: #cccccc" />
                    </svg>
                    Phone Number
                </label>
                <label>
                    <input name="phonenumber" placeholder="Phone Number" type="text" maxlength="10" id="phone">
                </label>
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
                <button type="submit" value="submit">Sign Up</button>
                <a href="login_page.php">Already have an account? Login Now</a>
            </form>
        </div>

    </div>
    <script src="../../scripts/animateDynamically.js"></script>
    <script src="../../scripts/authValidate.js"></script>

</body>

</html>