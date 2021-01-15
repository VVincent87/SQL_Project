<?php

function addUser($pdo, $data){
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];

    var_dump($data);

    $sql = "
        INSERT INTO user (first_name, last_name, email)
        VALUES (:firstname, :lastname, :email)
    ";

    $stmt = $pdo -> prepare($sql);

    try {
        $stmt->execute(
            [
                "firstname" => $firstname,
                "lastname" => $lastname,
                "email" => $email
            ]
        );
        
    } catch (Exception $e) {
        $pdo->rollback();
        throw $e;
    }
}

/* function getAllUsers() {

    $sql = "
        SELECT *
        FROM user
    ";

$stmt = $pdo -> prepare($sql);

    try {
        $stmt->execute();
        $allUsers = $stmt->fetchAll();
    } catch (Exception $e) {
        $pdo->rollback();
        throw $e;
    }

$stmt -> execute();

// $stmt -> fetchAll();

//while($data = $stmt->fetch()) {
//    var_dump($data);
//}

// $allUsers = $stmt -> fetchAll();

// foreach ($allUsers as $user) {
//    var_dump($user);
//}
} */