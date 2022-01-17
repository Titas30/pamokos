<?php

include 'helper.php'

$email = $_POST['email'];
$password = $_POST['password'];

$email = clearEmail($email);
$password = hashPassword($password);

$users = readFromCsv('users.csv');

foreach ($users as $user){
    if($password === $users[3] && $email === $user[2]){
$login = true;
        break;
    }
}
if ($login){
    echo 'prisijungus';
    
}else{
    echo 'wrong email';
}


// echo'<pre>';
// print_r($users);


