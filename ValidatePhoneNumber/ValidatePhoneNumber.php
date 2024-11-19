<?php
function ValidatePhoneNumber($phoneNumber)
{
    $pattern = "/^\([0-9]{2}\)-\(0[0-9]{9}\)$/";
    if (preg_match($pattern, $phoneNumber)) {
        echo $phoneNumber . " is valid \n";
    } else {
        echo $phoneNumber . " is invalid \n";
    }
}

$valid = ["(84)-(0978489648)"];
$invalid = ["(a8)-(22222222)"];

echo "Valid phone number: \n";
foreach ($valid as $v) {
    ValidatePhoneNumber($v);
}

echo "\nInvalid phone number: \n";
foreach ($invalid as $i) {
    ValidatePhoneNumber($i);
}
