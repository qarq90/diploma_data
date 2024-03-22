<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $race = $_POST['race'];
    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";

    echo "<h2>Entered Data:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Gender: $gender</p>";
    echo "<p>Race: $race</p>";
    echo "<p>Hobbies: $hobbies</p>";
}
