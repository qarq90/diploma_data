<div class="hidden main">
    <?php
    include "../php/database/connection.php";

    if (!$connection) {
        header("Location: ./404_not_found.php");
        exit();
    } else {
        $fetchArticles = 'SELECT * FROM articles';
        $result = mysqli_query($connection, $fetchArticles);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                $ARTICLE_LINK = $row['ARTICLE_LINK'];
                $ARTICLE_TITLE = $row['ARTICLE_TITLE'];
                $ARTICLE_PARA_A = $row['ARTICLE_PARA_A'];
                $ARTICLE_CARD_IMG = $row['ARTICLE_IMG_A'];

                $ARTICLE_PARA_A = substr($ARTICLE_PARA_A, 0, 100);

                ?>

                <div class="hidden card-grid">
                    <a href="<?php echo $ARTICLE_LINK ?>?value=<?php echo $ARTICLE_TITLE ?>">
                        <div class="home-cards">
                            <img class="hidden card-img" src="data:image;base64,<?php echo $ARTICLE_CARD_IMG ?>"
                                 alt="IMAGE">
                            <div class="card-text">
                                <h1><?php echo $ARTICLE_TITLE ?></h1>
                                <p><?php echo $ARTICLE_PARA_A ?>....... </p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php

            }
        }
    }


    mysqli_close($connection);
    ?>
</div>
