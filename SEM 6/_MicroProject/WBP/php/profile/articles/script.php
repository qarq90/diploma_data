<?php
include "../../php/database/connection.php";

if (!$connection) {
    header("Location: ./404_not_found.php");
    exit();
} else {
    $authorId = $_SESSION['USER_ID'];

    $fetchArticles = "SELECT * FROM articles WHERE AUTHOR_ID = '$authorId'";
    $result = mysqli_query($connection, $fetchArticles);
}