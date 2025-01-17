<div class='hidden article-container'>
    <?php
    include '../../php/database/connection.php';

    if (isset($_GET['value'])) {
        $received_value = $_GET['value'];

        $getImages = 'SELECT * FROM articles WHERE ARTICLE_TITLE = \'' . $received_value . '\'';
        $result = mysqli_query($connection, $getImages);

        while ($row = mysqli_fetch_assoc($result)) {

            $ARTICLE_TITLE = $row['ARTICLE_TITLE'];
            $ARTICLE_PARA_A = $row['ARTICLE_PARA_A'];
            $ARTICLE_PARA_B = $row['ARTICLE_PARA_B'];
            $ARTICLE_PARA_C = $row['ARTICLE_PARA_C'];
            $ARTICLE_PARA_D = $row['ARTICLE_PARA_D'];
            $ARTICLE_IMG_A = $row['ARTICLE_IMG_A'];
            $ARTICLE_IMG_B = $row['ARTICLE_IMG_B'];
            ?>

            <div class="content-sectionA">
                <h1 class="hidden article-title"><?php echo $ARTICLE_TITLE; ?></h1>
                <p class="hidden short-para"><?php echo $ARTICLE_PARA_A; ?></p>
                <img class="hidden my-img full_img" src="data:image;base64,<?php echo $ARTICLE_IMG_A; ?>" alt="IMAGE" />
            </div>

            <div class="content-sectionB">
                <p class="hidden short-para"><?php echo $ARTICLE_PARA_B; ?></p>
                <p class="hidden short-para"><?php echo $ARTICLE_PARA_C; ?></p>
            </div>

            <div class="content-sectionC">
                <img class="hidden my-img full_img" src="data:image;base64,<?php echo $ARTICLE_IMG_B; ?>" alt="IMAGE" />
                <p class="hidden short-para"><?php echo $ARTICLE_PARA_D; ?></p>
            </div>

            <?php
        }
    } else {
        echo 'No images found.';
    }
    mysqli_close($connection);
    ?>
</div>
