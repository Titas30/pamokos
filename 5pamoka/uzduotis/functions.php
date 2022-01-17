<?php

if ($_POST) {
    $email = $_POST['user_email'];

    function isEmailValid($email) {
       
        if (strpos($email, '@')) {
            return true;
         } else {
             return false;
         }
    }

    if (isEmailValid($email)) {
        echo 'emailas geras';
    } else {
        echo 'blogas emailas';
        }
    }

    