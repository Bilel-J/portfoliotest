<?php
?>
<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="Login.css" media="screen" type="text/css" />
    </head>
    <body>
    <?php include_once "Menu.php"; ?>  
        <div id="container">            
            <form>
                <h1>Connexion</h1>
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <input type="submit" id='submit' value='LOGIN' >
            </form>
        </div>
    </body>
</html>