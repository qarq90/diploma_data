<?php
function validateIPAddress($ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP)) {
        return true;
    } else {
        return false;
    }
}

$ip1 = "192.168.0.1";
$ip2 = "256.256.256.256";
$ip3 = "abc.def.ghi.jkl";

echo "IP 1: " . ($ip1 . (validateIPAddress($ip1) ? " is valid" : " is invalid")) . "\n";
echo "IP 2: " . ($ip2 . (validateIPAddress($ip2) ? " is valid" : " is invalid")) . "\n";
echo "IP 3: " . ($ip3 . (validateIPAddress($ip3) ? " is valid" : " is invalid")) . "\n";
