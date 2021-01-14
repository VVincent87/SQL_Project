<?php

if(isset($POST['firstname'])){
    addUser($pdo, $POST);
}

include '../view/signin_view.php';
