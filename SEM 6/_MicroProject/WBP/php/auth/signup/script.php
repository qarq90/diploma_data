<?php

session_start();

include "../../database/connection.php";

function generateRandomString() : string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < 40; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $randomString;
}

if (isset($_POST['username']) && isset($_POST['phonenumber']) && isset($_POST['email']) && isset($_POST['password'])) {

    $phone_number_pattern = "/^\d{10}$/";

    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE USER_EMAIL = '$email'";
    $result = mysqli_query($connection, $query);
    $usersArray = mysqli_fetch_array($result, MYSQLI_ASSOC);
    print_r($usersArray);

    if ($usersArray) {
        header("Location: ../../../pages/auth/signup_page.php?error=Email already exists");
        exit();
    } else {
        $user_id = generateRandomString();
        $_SESSION['USER_ID'] = $user_id;
        $query = "INSERT INTO users (USER_ID, USER_NAME, USER_PHONE_NUMBER, USER_EMAIL, USER_PASSWORD) VALUES ('$user_id','$username','$phonenumber','$email','$password')";
        $result = mysqli_query($connection, $query);
        header("Location: ../../../pages/home.php");
        exit();
    }
} else {
    header("Location: ../../../pages/404_not_found.php");
    exit();
}
