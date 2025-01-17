<?php

include "../../php/database/connection.php";

$query = "SELECT * FROM users WHERE USER_ID = '" . $_SESSION['USER_ID'] . "'";
$result = mysqli_query($connection, $query);
$current_user = mysqli_fetch_assoc($result);

$info = ["Username", "Phone Number", "Email", "Password"];
