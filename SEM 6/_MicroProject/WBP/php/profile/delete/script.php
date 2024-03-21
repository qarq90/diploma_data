<?php

include "../../database/connection.php";

if (isset($_POST['del-title'])) {
    $ARTICLE_ID = $_POST['del-title'];
    $query = "DELETE FROM articles WHERE ARTICLE_ID = '" . $ARTICLE_ID . "'";
    $result = mysqli_query($connection, $query);
    header("Location: ../../../pages/profile/profile.php?delete=Article Deleted");
}