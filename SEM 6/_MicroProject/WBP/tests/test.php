<?php
include "../php/database/connection.php";

$fetchArticles = 'SELECT * FROM articles';
$result = mysqli_query($connection, $fetchArticles);

while ($row = mysqli_fetch_assoc($result)) {
    $img = base64_encode($row['ARTICLE_IMG_A']);
    ?>

    <img src="data:image/jpeg;base64,<?php echo $img; ?>" alt="Article Image">

    <?php
}
?>
