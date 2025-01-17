<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Display</title>
</head>
<body>
<h2>Mitro plzz form bhardo...</h2>
<form id="userForm" action="WBPExperiment10_PHP.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label>Gender:</label><br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label><br>
    <input type="radio" id="Dishwasher" name="gender" value="Dishwasher">
    <label for="Dishwasher">Dishwasher</label><br>
    <input type="radio" id="Attack helicopter" name="gender" value="Attack helicopter">
    <label for="Attack helicopter">Attack helicopter</label><br>
    <input type="radio" id="Mental illness" name="gender" value="Mental illness">
    <label for="Mental illness">Mental illness</label><br><br>

    <label>Race:</label><br>
    <input type="radio" id="Wigga" name="race" value="Wigga">
    <label for="Wigga">Wigga</label><br>
    <input type="radio" id="Nigga" name="race" value="Nigga">
    <label for="Nigga">Nigga</label><br><br>

    <label for="hobby">Hobbies:</label><br>
    <input type="checkbox" id="Cheating" name="hobbies[]" value="Cheating">
    <label for="Cheating">Cheating</label><br>
    <input type="checkbox" id="Shitposting" name="hobbies[]" value="Shitposting">
    <label for="Shitposting">Shitposting</label><br>
    <input type="checkbox" id="Mischief" name="hobbies[]" value="Mischief">
    <label for="Mischief">Mischief</label><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
