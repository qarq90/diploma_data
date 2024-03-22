<?php
$sub = "Sending mail to my alt-account...";
$msg = "Red army was right";
$rec = "goldrogerpk05@gmail.com";
if (mail($rec, $sub, $msg))
    echo "Email Sent";
else
    echo "Email not Sent";
