<?php

session_start();

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];

    echo $_SESSION['username'] . '<br>';
    echo $_SESSION['email'] . '<br>';
    echo $_SESSION['password'];
}