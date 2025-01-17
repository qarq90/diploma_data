<?php

$conn = new mysqli("localhost", "root", "", "sandbox");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "INSERT INTO exp_15_and_16 (email, pass) VALUES ('$email', '$password')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Record Added successfully";
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $password;
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    } elseif (isset($_POST['update'])) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "UPDATE exp_15_and_16 SET email = '$email', pass = '$password' WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Record Updated successfully";
                echo "<br>";
                echo $email;
                echo "<br>";
                echo $password;
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    } elseif (isset($_POST['delete'])) {
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $query = "DELETE FROM exp_15_and_16 WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Record Deleted successfully";
                echo "<br>";
                echo $email;
                echo "<br>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }
        }
    }
}
