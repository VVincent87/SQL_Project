<?php

//include '../model/user.php';

// quand le bouton register est cliqué
if(isset($_POST['register'])){
    registerUser($pdo, $_POST);
}

include '../view/register_view.php';

?>