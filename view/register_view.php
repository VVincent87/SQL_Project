<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round"
	rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="SQL_Project\public\css\styles.css">
    <link rel="stylesheet" type="text/css" href="SQL_Project/public/css/main.css">
    <title>Document</title>
</head>
<body>
    

<div class = "header_title">
    <h2>Bonjour, veuillez vous enregistrer sur Supergoat Hardware! :)</h2>
    </div>   
        <form action="/register" method="post">

        <!-- affichage des erreurs -->

        <?php include('../public/errors.php'); ?>

<div class = "display-flex">
        <div class="input-group">
            <label>Prénom: </label>
            <input type="text" name="firstname"><br>
        </div>

        <div class="input-group">
            <label>Nom: </label>
            <input type="text" name="lastname"><br>
        </div>

        <div class="input-group">
            <label>Email: </label>
            <input type="text" name="email"><br>
        </div>

        <div class="input-group">
            <label>Mot de passe: </label>
            <input type="password" name="password_1"><br>
        </div>

        <div class="input-group">
            <label>Répétez le mot de passe: </label>
            <input type="password" name="password_2"><br>
        </div>

        <div class="input-group">
            <label>Téléphone: </label>
            <input type="text" name="phone"><br>
        </div>    

</div>

        <div class="input-group">
            <button type="submit" name="register" class="btn">Envoyer</button>
        </div>

        <p>Déja membre? <a href="signin_view.php"> Identifiez-vous </a>
        </p>

</form>


</body>

</html>                            