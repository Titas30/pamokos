<?php

include 'helper.php';
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

$email= clearEmail($email);

if (isPasswordValid($password1, $password2) && isEmailValid($email)) {
   $data = [];
    $data[] = [$firstName, $lastName, $email, $password1]; 
    writeToCsv($data, 'users.csv');
    
} else {
    echo 'Netinkamas email';
}

