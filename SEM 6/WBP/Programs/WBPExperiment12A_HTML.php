<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="WBPExperiment12A_CSS.css">
</head>
<body>
<h2>Form Validations</h2>
<form method="post" action="WBPExperiment12A_PHP.php">

    <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success'] ?></p>
    <?php } ?> <br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'] ?></p>
    <?php } ?> <br>

    <label for="age">Age:</label>
    <input type="text" id="age" name="age">
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'] ?></p>
    <?php } ?> <br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob">
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'] ?></p>
    <?php } ?> <br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'] ?></p>
    <?php } ?> <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error'] ?></p>
    <?php } ?> <br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
