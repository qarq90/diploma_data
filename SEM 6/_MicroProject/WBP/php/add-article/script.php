<?php

session_start();

include "../database/connection.php";

function generateRandomString(): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < 40; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }

    return $randomString;
}

if (
    isset($_POST['submit']) &&
    isset($_FILES['article_imgA']) &&
    isset($_FILES['article_imgB']) &&
    isset($_POST['article_title']) &&
    isset($_POST['article_paraA']) &&
    isset($_POST['article_paraB']) &&
    isset($_POST['article_paraC']) &&
    isset($_POST['article_paraD'])
) {

    $article_title = isset($_POST['article_title']);
    $article_title = $_POST['article_title'];
    $article_paraA = $_POST['article_paraA'];
    $article_paraB = $_POST['article_paraB'];
    $article_paraC = $_POST['article_paraC'];
    $article_paraD = $_POST['article_paraD'];
    $article_imgA = $_FILES['article_imgA'];
    $article_imgB = $_FILES['article_imgB'];
    $article_link = "./entertainment/" . $article_title . ".php";
    $article_id = generateRandomString();
    $author_id = $_SESSION['USER_ID'];

    if (empty($article_title)) {
        header("Location: ../../pages/add/add_article_page.php?title=❗ TITLE CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraA)) {
        header("Location: ../../pages/add/add_article_page.php?paraA=❗ PARAGRAPH A CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraB)) {
        header("Location: ../../pages/add/add_article_page.php?paraB=❗ PARAGRAPH B CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraC)) {
        header("Location: ../../pages/add/add_article_page.php?paraC=❗ PARAGRAPH C CAN'T BE EMPTY");
        exit();
    } elseif (empty($article_paraD)) {
        header("Location: ../../pages/add/add_article_page.php?paraD=❗ PARAGRAPH D CAN'T BE EMPTY");
        exit();
    }
    // elseif ($article_imgA['error'] = 4) {
    //     header("Location: ../../pages/add/add_article_page.php?imgA=❗ PLEASE SELECT AN IMAGE FOR THE ARTICLE");
    //     exit();
    // } elseif ($article_imgB['error'] = 4) {
    //     header("Location: ../../pages/add/add_article_page.php?imgB=❗ PLEASE SELECT AN IMAGE FOR THE ARTICLE");
    //     exit();
    // } 
    else {

        $htmlContent = "<!DOCTYPE html>
    
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>eco eco | Added Article</title>
    <link href='../../styles/globals.css' rel='stylesheet'>
</head>
<body>
<?php
        include '../../components/ui/Nav/InnerNav.php';
        ?>
";

        $htmlContent .= " 
    <div class='hidden article-container'>    
        <?php
        include '../../components/pages/ArticleBody.php';
        ?>
    </div>
    
        <?php
        include '../../components/ui/Footer/InnerFooter.php';
        ?> ";

        $filePath = "../../pages/entertainment/" . $article_title . ".php";

        file_put_contents($filePath, $htmlContent);

        $tmp_nameA = $_FILES['article_imgA']['tmp_name'];
        $tmp_nameB = $_FILES['article_imgB']['tmp_name'];

        $img_blobA = base64_encode(file_get_contents($tmp_nameA));
        $img_blobB = base64_encode(file_get_contents($tmp_nameB));

        $query = "INSERT INTO articles (ARTICLE_ID, AUTHOR_ID, ARTICLE_TITLE, ARTICLE_PARA_A, ARTICLE_PARA_B, ARTICLE_PARA_C, ARTICLE_PARA_D, ARTICLE_IMG_A, ARTICLE_IMG_B, ARTICLE_LINK) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($connection, $query);

        mysqli_stmt_bind_param($stmt, "ssssssssss", $article_id, $author_id, $article_title, $article_paraA, $article_paraB, $article_paraC, $article_paraD, $img_blobA, $img_blobB, $article_link);

        mysqli_stmt_execute($stmt);

        header("Location: ../../pages/add/add_article_page.php?success=Article Added Successfully");
    }
} else {
    header("Location: ../../pages/add/add_article_page.php?error=Please fill out all the fields");
    exit();
}
