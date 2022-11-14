<?php

$email_add1 = "mhdderi93@gmail.com";
$email_add2 = "contact@elan";

if (filter_var($email_add1, FILTER_VALIDATE_EMAIL)){
    echo "L’adresse ".$email_add1." est une adresse e-mail valide <br>";
}else {
    "L’adresse ".$email_add1 ." est une adresse e-mail invalide <br>";
}

if (filter_var($email_add2, FILTER_VALIDATE_EMAIL)){
    echo "L’adresse ".$email_add2." est une adresse e-mail valide <br>";
}else {
    echo "L’adresse ".$email_add2." est une adresse e-mail invalide <br>";
}



?>