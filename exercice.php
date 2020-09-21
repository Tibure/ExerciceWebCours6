<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Exercice</title>
</head>
<body>
 
<h2> Exercice</h2>
        <form class="needs-validation" method="post" action="/connexion.php" >
    <div>
            <div class="form-group">
            <label for="username">Votre compte</label><br>
        <input type="text" id="username" name="username" pattern="[a-zA-Z]{8,10}" required><br>
                <div class="invalid-feedback">
                    Le username est requis.
                </div>
            </div>
            <div class="form-group">
            <label for="password">Mot de passe</label><br>
        <input type="text" id="password" name="password" required><br>
                <div class="invalid-feedback">
                    Le password est requis.
                </div>
            </div>



            </div>


        </div>
    </div>
    <button type="submit" class="btn btn-primary">Me connecter</button>
</form>





</body>
</html>