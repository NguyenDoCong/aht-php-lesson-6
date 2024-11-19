<?php
function validateAccount($account)
{
    $pattern = "/^[_a-z0-9]{6,}$/";
    if (preg_match($pattern, $account)) {
        echo $account . " is valid \n";
    } else {
        echo $account . " is invalid \n";
    }
}

$valid = ["123abc_", "_abc123", "______", "123456", "abcdefg"];
$invalid = [".@", "12345", "1234_", "abcde"];

echo "Valid accounts: \n";
foreach ($valid as $v) {
    validateAccount($v);
}

echo "\nInvalid accounts: \n";
foreach ($invalid as $i) {
    validateAccount($i);
}
