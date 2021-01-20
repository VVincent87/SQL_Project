<?php

//include '../model/user.php';

$connected = false; // on définit l'user comme étant non connecté de base

// quand le bouton signin est cliqué
if(isset($_POST['email'])){
    logUser($pdo, $_POST);
    if (password_verify($_POST['password'], getPassword($pdo, $_POST['email'])['password']) && $_POST['email'] == getPassword($pdo, $_POST['email'])['email']) {
        $connected = true;
        $_SESSION['connected'] = $connected;
        $_SESSION['firstname'] = getUser($pdo, $_POST['email'])["first_name"];
        $_SESSION['lastname'] = getUser($pdo, $_POST['email'])["last_name"];
        $_SESSION['email'] = getUser($pdo, $_POST['email'])["email"];
        $_SESSION['phone'] = getUser($pdo, $_POST['email'])["phone"];
        $_SESSION['id'] = getUser($pdo, $_POST['email'])["id"];
        echo ('Connexion réussie, bienvenue');
    } else {
        echo ('Erreur d\'identifiants');
    }
    var_dump($_SESSION);
}

include '../view/signin_view.php';

?>