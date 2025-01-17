<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
</head>
<body>
<h2>Form Page</h2>
<form action="WBPExperiment11_PHP.php" method="post">
    <input type="hidden" name="hiddenField" value="hiddenValue">

    <label for="listBox">Listbox:</label>
    <select id="listBox" name="listBox">
        <option value="Narendra Modi">Narendra Modi</option>
        <option value="Rahul Gandhi">Rahul Gandhi</option>
        <option value="Arvind Kejriwal">Arvind Kejriwal</option>
    </select><br><br>

    <label for="comboBox">Combobox:</label>
    <select id="comboBox" name="comboBox">
        <option value="Kanye West">Kanye West</option>
        <option value="Travis Scott">Travis Scott</option>
        <option value="Lil Uzi Vert">Lil Uzi Vert</option>
    </select><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
