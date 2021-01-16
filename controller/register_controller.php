<?php

include '../model/user.php';

// quand le bouton register est cliqué

if(isset($_POST['register'])){
    addUser($pdo, $_POST);
}

// var_dump($_POST); controle du contenu de $_POST avant envoi du formulaire

include '../view/register_view.php';