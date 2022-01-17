<?php

$email = $_POST['email'];

function clearEmail($email) {

    $email = trim($email);
    $email = strtolower($email);
    return $email;
}

function isEmailValid($email) {
    if (strpos($email, '@')){
        return true;
    }else{
        return false;
    }
}
$email = clearEmail($email);

if (clearEmail($email)){

    $file = fopen('sub.csv', 'a');
    foreach ($email) {
        fputcsv($file,$email);
    }
    fclose($file);
}