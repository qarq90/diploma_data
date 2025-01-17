<?php
$cookie_name = "ek_banda";
$cookie_value = "Baburao Ganpatrao";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";

    $new_cookie_value = "Manav";
    setcookie($cookie_name, $new_cookie_value, time() + (86400 * 30), "/");

    echo "Modified Value is: " . $_COOKIE[$cookie_name] . "<br>";

    setcookie($cookie_name, "", time() - 3600, "/");
    echo "Cookie '" . $cookie_name . "' is deleted!";
}
?>
