<?php

session_start();

include "../../database/connection.php";

if (isset($_POST['new-username']) && isset($_POST['new-phonenumber']) && isset($_POST['new-password'])) {

    $phone_number_pattern = "/^\d{10}$/";

    $username = $_POST['new-username'];
    $phonenumber = $_POST['new-phonenumber'];
    $password = $_POST['new-password'];

    if (empty($username)) {
        header("Location: ../../../pages/profile/profile.php?error=Username cannot be empty");
        exit();
    } else if (empty($phonenumber)) {
        header("Location: ../../../pages/profile/profile.php?error=Phone Number cannot be empty");
        exit();
    } else if (empty($password)) {
        header("Location: ../../../pages/profile/profile.php?error=Password cannot be empty");
        exit();
    } elseif (!preg_match("/^\d{10}$/", $phonenumber)) {
        header("Location: ../../../pages/profile/profile.php?error=Invalid Phone Number format");
        exit();
    } else {
        $query = "UPDATE users SET USER_NAME = '$username', USER_PHONE_NUMBER = '$phonenumber', USER_PASSWORD = '$password' WHERE USER_ID = '" . $_SESSION['USER_ID'] . "'";
        $result = mysqli_query($connection, $query);
        header("Location: ../../../pages/profile/profile.php?value=Profile Updated Successfully");
        exit();
    }
}
