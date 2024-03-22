<?php

if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['dob']) && isset($_POST['password'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    if (empty($name) || empty($email) || empty($age) || empty($dob) || empty($password)) {
        header('Location: ./WBPExperiment12A_HTML.php?error=Details cannot be empty');
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: ./WBPExperiment12A_HTML.php?error=Invalid Email Address');
        exit();
    } elseif (!is_numeric($age) || $age <= '0' || $age >= '90' || $age != '19') {
        header('Location: ./WBPExperiment12A_HTML.php?error=Invalid Age');
        exit();
    } elseif ($name === 'qarq90' && $email === 'qarq90@gmail.com' && $password === 'bloodonhands' && $dob === '2005-01-17') {
        header('Location: ./WBPExperiment12A_HTML.php?success=Details Verified');
        exit();
    } else {
        header('Location: ./WBPExperiment12A_HTML.php?error=Details do not match expected values');
        exit();
    }
} else {
    header('Location: ./WBPExperiment12A_HTML.php?error=All fields are required');
    exit();
}
