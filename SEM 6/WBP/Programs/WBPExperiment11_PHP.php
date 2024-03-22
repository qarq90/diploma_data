<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listBox = $_POST['listBox'];
    $comboBox = $_POST['comboBox'];

    echo "<h2>Entered Data:</h2>";
    echo "<p>Listbox Selected: $listBox</p>";
    echo "<p>Combobox Selected: $comboBox</p>";
}