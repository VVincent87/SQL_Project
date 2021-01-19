<?php

//include '../model/user.php';

// quand le bouton signin est cliqué

if(isset($_POST['signin'])){
    var_dump(logUser($pdo, $_POST));
    logUser($pdo, $_POST);
}


include '../view/signin_view.php';

?>