<?php

include 'help.php'

// $email = $_POST['email'];

$email = isEmailValid($email);

$email= clearEmail($email);

if (isEmailValid($email) {
   $data = [];
    $data[] = [$email]; 
    addToCsv($data, 'sub.csv');
    
} else {
    echo 'Patikrinkit Email';
}
