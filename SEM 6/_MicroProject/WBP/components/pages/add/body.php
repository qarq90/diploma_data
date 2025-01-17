<div class="hidden add-article-container">
    <form action="../../php/add-article/script.php" method="post" enctype="multipart/form-data">
        <h1>Add Article</h1>

        <?php if (isset($_GET['username'])) { ?>
            <p class="hidden error"><?php echo $_GET['username'] ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="hidden success"><?php echo $_GET['success'] ?></p>
        <?php } ?>

        <?php if (isset($_GET['title'])) { ?>
            <p class="hidden error"><?php echo $_GET['title'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label>
                Article Title
            </label>
            <label for="username">
                <input type="text" placeholder="Article Title" name="article_title" />
            </label>
        </div>

        <?php if (isset($_GET['paraA'])) { ?>
            <p class="hidden error"><?php echo $_GET['paraA'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label>
                Article Paragraph A
            </label>
            <label for="username">
                <textarea placeholder="Paragraph A" name="article_paraA"></textarea>
            </label>
        </div>

        <?php if (isset($_GET['paraB'])) { ?>
            <p class="hidden error"><?php echo $_GET['paraB'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label>
                Article Paragraph B
            </label>
            <label for="username">
                <textarea placeholder="Paragraph B" name="article_paraB"></textarea>
            </label>
        </div>

        <?php if (isset($_GET['paraC'])) { ?>
            <p class="hidden error"><?php echo $_GET['paraC'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label>
                Article Paragraph C
            </label>
            <label for="username">
                <textarea placeholder="Paragraph C" name="article_paraC"></textarea>
            </label>
        </div>

        <?php if (isset($_GET['paraD'])) { ?>
            <p class="hidden error"><?php echo $_GET['paraD'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label>
                Article Paragraph D
            </label>
            <label for="username">
                <textarea placeholder="Paragraph D" name="article_paraD"></textarea>
            </label>
        </div>

        <?php if (isset($_GET['imgA'])) { ?>
            <p class="hidden error"><?php echo $_GET['imgA'] ?></p>
        <?php } ?>

        <?php if (isset($_GET['imgError'])) { ?>
            <p class="hidden error"><?php echo $_GET['imgError'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label for="file-uploadA" id="img-label">
                Article Image A
            </label>
            <label class="hidden custom-file-upload" for="file-uploadA">
                Upload Image
            </label>
            <input class="hidden file-input" type="file" id="file-uploadA" accept="image/*" name="article_imgA">
        </div>

        <?php if (isset($_GET['imgB'])) { ?>
            <p class="hidden error"><?php echo $_GET['imgB'] ?></p>
        <?php } ?>

        <?php if (isset($_GET['imgError'])) { ?>
            <p class="hidden error"><?php echo $_GET['imgError'] ?></p>
        <?php } ?>

        <div class="hidden input-container">
            <label for="file-uploadB" id="img-label">
                Article Image B
            </label>
            <label class="hidden custom-file-upload" for="file-uploadB">
                Upload Image
            </label>
            <input class="hidden file-input" type="file" id="file-uploadB" accept="image/*" name="article_imgB">
        </div>


        <button type="submit" name="submit">
            Add article
        </button>

    </form>
</div>
