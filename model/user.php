<?php

$connected = false; // on définit l'user comme étant non connecté de base

$firstname ='';
$lastname ='';
$email ='';
$password = '';
$password_1 ='';
$password_2 ='';
$phone ='';
$errors = array();

// défintion de la fonction qui va permettre d'ajouter l'utilisateur à la BDD à partir du register

function addUser($pdo, $data){   
    
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $password_1 = $data['password_1'];
    $password_2 = $data['password_2'];
    $phone = $data['phone'];

    // vérification du remplissage des champs de texte du register 
    if(empty($firstname)) {
        array_push($GLOBALS['errors'], "Merci d'indiquer votre prénom"); 
    }
    if(empty($lastname)) {
        array_push($GLOBALS['errors'], "Merci d'indiquer votre nom"); 
    }
    if(empty($email)) {
        array_push($GLOBALS['errors'], "Merci d'indiquer votre mail"); 
    }
    if(empty($password_1)) {
        array_push($GLOBALS['errors'], "Mot de passe requis"); 
    }
    if(empty($password_2)) {
        array_push($GLOBALS['errors'], "Mot de passe requis"); 
    }
    if(empty($phone)) {
        array_push($GLOBALS['errors'], "Merci d'indiquer votre téléphone"); 
    }

    // vérification de correspondance des mots de passe 1 & 2
    if($password_1 != $password_2) {
        array_push($GLOBALS['errors'], "Les mots de passe saisis ne correspondent pas!");
    }

    // si pas d'erreurs, enregistrement de l'utilisateur dans la BDD
    if(empty($GLOBALS['errors'])) {

        //cryptage mot de passe
        $passwordhash = password_hash($_POST['password_1'], PASSWORD_BCRYPT); 
        $password = $passwordhash;

        $sql = " 
        INSERT INTO client (first_name, last_name, email, password, phone)
        VALUES (:firstname, :lastname, :email, :password, :phone)
        ";

        $stmt = $pdo -> prepare($sql);

        try {
            $stmt->execute(
                [
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                    "email" => $email,
                    "password" => $password,
                    "phone" => $phone
                ]
            );
        } 
        
        catch (Exception $e) {
            $pdo->rollback();
            throw $e;
        }

        $_SESSION['firstname'] = $firstname;
        header('location: /signin'); // redirection sur la page signin
    }

}

function logUser($pdo, $data){

    $password = $data['password'];
    $email = $data['email'];

    var_dump($data);

    // vérification du remplissage des champs de texte du register 
    if(empty($email)) {
        array_push($GLOBALS['errors'], "Merci d'indiquer votre mail"); 
    }
    if(empty($password)) {
        array_push($GLOBALS['errors'], "Merci d'indiquer votre mot de passe"); 
    }

    // si pas d'erreurs, connexion de l'utilisateur
    if(empty($GLOBALS['errors'])) {
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT); 

        $sql = " 
        SELECT password, email FROM client WHERE email = $email
        ";

        $stmt = $pdo -> prepare($sql);

        $stmt->execute();

        $user = $stmt->fetchAll();

        var_dump($user);

        /* if (password_verify($password, password) && $user->email == $email) {
            $connected = true;
            $_SESSION['connected'] = $connected;
            $_SESSION['firstname'] = $user["firstname"];
            $_SESSION['lastname'] = $user["lastname"];
            echo ('Connexion réussie, bienvenue');
        } else {
            $_SESSION['connected'] = false;
            echo ('Erreur d\'identifiants');
        } */

    var_dump($_SESSION['connected']);
    }

};

?>