<h1>Salut cher membre! Merci de t'identifier :)</h1>

<form action="/signin" method="post" >
    
    <div class="input-group">
        <label for="firstname">Prénom:</label>
        <input id="firstname" name="firstname" type="text">
    </div>    
    
    <div class="input-group">
        <label for="lastname">Nom:</label>
        <input id="lastname" name="lastname" type="text">
    </div>

    <div class="input-group">
        <label for="email">Email:</label>
        <input id="email" name="email" type="text">
    </div>

    <div class="input-group">
        <button type="submit" name="signin" class="btn">Envoyer</button>
    </div>
    
    <p>Pas encore membre? <a href="register_view.php"> Enregistrez-vous! </a></p>

</form>