<?php

if(isset($POST['firstname'])){
    addUser($pdo, $_POST);
}

include '../view/signin_view.php';
