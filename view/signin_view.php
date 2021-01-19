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
        <button type="submit" name="signin" class="btn">Envoyer</button>
    </div>
    
    <p>Pas encore membre? <a href="register_view.php"> Enregistrez-vous! </a></p>

</form>