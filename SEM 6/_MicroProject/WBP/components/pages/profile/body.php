<div class="hidden user-profile">

    <div class="hidden header-title">
        <h1>Account</h1>
        <p>You can access and update your profile information here.</p>
    </div>

    <?php
    include "../../php/profile/script.php";

    $name = '';
    $phone_number = '';
    $email = '';
    $password = '';

    if (isset($_SESSION['USER_ID'])) {
        $query = "SELECT * FROM users WHERE USER_ID = '" . $_SESSION['USER_ID'] . "'";
        $result = mysqli_query($connection, $query);
        $current_user = mysqli_fetch_assoc($result);

        $info = ["Username", "Phone Number", "Email", "Password"];
        $name = $current_user['USER_NAME'];
        $phone_number = $current_user['USER_PHONE_NUMBER'];
        $email = $current_user['USER_EMAIL'];
        $password = $current_user['USER_PASSWORD'];
    }
    ?>

    <div class="hidden profile-values">
        <div class="hidden title-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"
                      style="fill: #cccccc"/>
            </svg>
        </div>
        <div class="hidden value-content">
            <h2>
                <?php echo $info[0] ?>
            </h2>
            <p class="detail-value">
                <?php echo $name ?>
            </p>
        </div>
    </div>
    <div class="hidden profile-values">
        <div class="hidden title-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
                      style="fill: #cccccc"/>
            </svg>
        </div>
        <div class="hidden value-content">
            <h2>
                <?php echo $info[1] ?>
            </h2>
            <p class="detail-value">
                <?php echo $phone_number ?>
            </p>
        </div>
    </div>
    <div class="hidden profile-values">
        <div class="hidden title-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"
                      style="fill: #cccccc"/>
            </svg>
        </div>
        <div class="hidden value-content">
            <h2>
                <?php echo $info[2] ?>
            </h2>
            <p class="detail-value">
                <?php echo $email ?>
            </p>
        </div>
    </div>
    <div class="hidden profile-values">
        <div class="hidden title-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"
                      style="fill: #cccccc"/>
            </svg>
        </div>
        <div class="hidden value-content">
            <h2>
                <?php echo $info[3] ?>
            </h2>
            <p id="hidden" class="detail-value">
                ****************
            </p>
            <p id="password" class="detail-value">
                <?php echo $password ?>
            </p>
        </div>
        <div>
            <button id="passwordButton">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"
                          style="fill: #cccccc"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="hidden edit-profile">

    <div class="hidden header-title">
        <h1>Edit Account</h1>
        <p>You can update your profile information below. Feel free to modify any details as needed.</p>
    </div>

    <div class="update-form">
        <form action="../../php/profile/update-profile/script.php" method="post">
            <?php if (isset($_GET['error'])) { ?>
                <p class="hidden error"><?php echo $_GET['error'] ?></p>
            <?php } ?>
            <?php if (isset($_GET['value'])) { ?>
                <p class="hidden updated"><?php echo $_GET['value'] ?></p>
            <?php } ?>
            <label class="hidden input-title">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"
                          style="fill: #cccccc"/>
                </svg>
                User Name
            </label>
            <label>
                <input name="new-username" placeholder="User Name" type="text" id="new-username"
                       value='<?php echo $name; ?>'>
            </label>
            <label class="hidden input-title">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
                          style="fill: #cccccc"/>
                </svg>
                Phone Number
            </label>
            <label>
                <input name="new-phonenumber" placeholder="Phone Number" type="text" maxlength="10" id="new-phone"
                       value='<?php echo $phone_number; ?>'>
            </label>
            <label class="hidden input-title">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"
                          style="fill: #cccccc"/>
                </svg>
                Email ID
            </label>
            <label>
                <input name="new-email" placeholder="Email ID" type="text" id="new-email" value='<?php echo $email; ?>'
                       disabled>
            </label>
            <label class="hidden input-title">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z"
                          style="fill: #cccccc"/>
                </svg>
                Password
            </label>
            <label>
                <input name="new-password" placeholder="Password" type="text" id="new-password"
                       value='<?php echo $password; ?>'>
            </label>
            <button type="submit" value="submit">Save Changes</button>
        </form>
    </div>
</div>

<div class="user-articles">
    <div class="hidden header-title">
        <h1>Your Articles</h1>
        <p>You can view your articles and delete them if needed.</p>
    </div>
    <?php if (isset($_GET['delete'])) { ?>
        <p class="hidden deleted"><?php echo $_GET['delete'] ?></p>
    <?php } ?>
    <?php

    include "../../php/profile/articles/script.php";

    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $ARTICLE_LINK = $row['ARTICLE_LINK'];
            $ARTICLE_TITLE = $row['ARTICLE_TITLE'];
            $ARTICLE_PARA_A = $row['ARTICLE_PARA_A'];
            $ARTICLE_CARD_IMG = $row['ARTICLE_IMG_A'];
            $ARTICLE_ID = $row['ARTICLE_ID'];
            $ARTICLE_PARA_A = substr($ARTICLE_PARA_A, 0, 100);
            ?>

            <div class="hidden card-gridB user-article">
                <a href="../<?= $ARTICLE_LINK ?>?value=<?= $ARTICLE_TITLE ?>">
                    <div class="home-cards">
                        <img class="hidden card-img" src="data:image;base64,<?= $ARTICLE_CARD_IMG ?>" alt="IMAGE">
                        <div class="card-text">
                            <h1><?= $ARTICLE_TITLE ?></h1>
                            <p><?= $ARTICLE_PARA_A ?>....... </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="hidden btn-container">
                <form action="../../php/profile/delete/script.php" method="post">
                    <label for="del-title"></label>
                    <input type="text" value="<?= $ARTICLE_ID ?>" id="del-title" name="del-title">
                    <button class="hidden del-btn" type="submit">Delete Article</button>
                </form>
            </div>

            <div class="hidden btn-container">
                <form action="../../php/profile/getPDF/script.php" method="post">
                    <label for="del-title"></label>
                    <input type="text" value="<?= $ARTICLE_ID ?>" id="del-title" name="del-title">
                    <button class="hidden del-btn">Get PDF</button>
                </form>
            </div>

            <?php
        }
    } else {
        echo '<p class="error">You have not uploaded any articles</p>';
    }

    mysqli_close($connection);
    ?>

</div>
