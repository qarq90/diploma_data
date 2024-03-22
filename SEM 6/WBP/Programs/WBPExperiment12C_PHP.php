<?php

function validateCompanyEmail($email) {
    $pattern = '/^[a-zA-Z0-9._%+-]+@outlook\.com$/';

    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false;
    }
}

$email1 = "qarq90@outlook.com";
$email2 = "sattarbaksh@example.com";

echo "Email 1: " . ($email1 . (validateCompanyEmail($email1) ? " is a valid company email" : " is not a valid company email")) . "\n";
echo "Email 2: " . ($email2 . (validateCompanyEmail($email2) ? " is a valid company email" : " is not a valid company email")) . "\n";

?>
