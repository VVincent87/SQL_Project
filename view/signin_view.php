<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="SQL_Project\public\css\styles.css">
    <link rel="stylesheet" type="text/css" href="SQL_Project/public/css/main.css">
    <title>Document</title>
</head>
<body>

<h1>Salut cher membre! Merci de t'identifier :)</h1>

<form action="/signin" method="post" >
    
    <!-- affichage des erreurs -->

    <?php include('../public/errors.php'); ?>

    <div class="input-group">
        <label for="email">Email:</label>
        <input id="email" name="email" type="text">
    </div>

    <div class="input-group">
        <label>Mot de passe: </label>
        <input type="password" name="password"><br>
    </div>

    <div class="input-group">
        <button type="submit" class="btn">Envoyer</button>
    </div>
    
    <p>Pas encore membre? <a href="/register"> Enregistrez-vous! </a></p>

</form>

</body>

</html>