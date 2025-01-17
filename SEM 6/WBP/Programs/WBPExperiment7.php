<?php

// Practical No: 7

// 1) Program to create an image
$width = 500;
$height = 500;
$img = imagecreate($width, $height);
header('Content-Type: image/jpeg');
$bg_color = imagecolorallocate($img, 29, 29, 29);
$txt_color = imagecolorallocate($img, 0, 0, 0);
//imagestring($img, 5, 5, 5, "qarq90", $txt_color);
imagejpeg($img);

// 2) Program to create an image with text
$width = 500;
$height = 500;
$img = imagecreate($width, $height);
header('Content-Type: image/jpeg');
$bg_color = imagecolorallocate($img, 29, 29, 29);
$txt_color = imagecolorallocate($img, 255, 255, 255);
imagestring($img, 10, 50, 50, "qarq90", $txt_color);
imagejpeg($img);

// 3) Program to create an image and display it in an html page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<img alt="" src="image.php">
</body>
</html>

<?php
    $src=imagecreatefromjpeg('image.jpg');
    $dst=ImageCreateTrueColor(900,900);
    imagecopyresampled($dst,$src,10,10,20,20,500,500,600,600);
    header('Content-Type: image/jpg');
    imagejpeg($dst);
?>

<?php

// 4) Program to demonstrate imagecopyresampled and imagecopyresized
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<img alt="" src="image.php">
</body>
</html>
<?php
    $src=imagecreatefromjpeg('image.jpg');
    $dst=ImageCreateTrueColor(900,900);
    imagecopyresampled($dst,$src,10,10,20,20,500,500,600,600);
    imagecopyresized($dst,$src,100,100,200,200,800,800,900,900);
    header('Content-Type: image/jpg');
    imagejpeg($dst);
?>

<!--5) Write a Program to create a PDF via FDPF library-->
<?php

require("../fpdf/fpdf.php");

$myPDF = new FPDF();

$myPDF->AddPage();

$row = file("./fpdf.txt");

$myPDF->SetFont('Arial', 'B', 12);

foreach ($row as $rowValue) {
    $data = explode(';', $rowValue);
    foreach ($data as $columnValue)
        $myPDF->Cell(90, 12, $columnValue, 1);
    $myPDF->SetFont('Arial', '', 12);
    $myPDF->Ln();
}
$myPDF->Output();

?>
