<?php

session_start();

include "../../database/connection.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE USER_EMAIL = '$email' AND USER_PASSWORD = '$password'";
    $result = mysqli_query($connection, $query);

    if ($current_user = mysqli_fetch_assoc($result)) {
        $_SESSION['USER_ID'] = $current_user['USER_ID'];
//        header("Location: ../../../pages/home.php");
    } else {
//        header("Location: ../../../pages/auth/login_page.php?error=Incorrect Email or Password");
    }
    echo $email . "<br>";
    echo $password;
} else {
    header("Location: ../../../pages/404_not_found.php");
}
exit();
