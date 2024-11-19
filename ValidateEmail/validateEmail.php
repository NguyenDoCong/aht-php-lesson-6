<?php
function validateEmail($email)
{
    $pattern = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    if (preg_match($pattern, $email)) {
        echo $email . " is valid \n\n";
    } else {
        echo $email . " is invalid \n\n";
    }
}

validateEmail("a@gmail.com");
validateEmail("ab@yahoo.com");
validateEmail("abc@hotmail.com");
validateEmail("@gmail.com");
validateEmail("ab@gmail.");
validateEmail("@#abc@gmail.com");
