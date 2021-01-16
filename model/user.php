<?php

function addUser($pdo, $data){
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];

    

    var_dump($data);

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
        
    } catch (Exception $e) {
        $pdo->rollback();
        throw $e;
    }
}

?>