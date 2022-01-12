<?php
if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"])){
    $name   = strip_tags(trim($_POST["nom"]));
    $mail   = filter_var(strip_tags(trim($_POST["email"])),FILTER_VALIDATE_EMAIL);  
    $msg    = strip_tags(trim($_POST["message"]));

    if ($name && $mail && $msg ){
        $to      = MAIL;
        $subject = "MsG Port";
        $message = $msg;
        $header  = [
            'From' => $mail,
            'Reply-To' => $mail,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
        mail($to, $subject, $message,$header);
    
        $to      = $mail;
        $subject = "Portfolio J.B";
        $message = "Merci pour votre temps";
        $header  = [
            'From' => MAIL,
            'Reply-To' => MAIL,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
    mail($to, $subject, $message,$header);

    }else{
       echo "erreur: votre message n'à pas été envoyé, veuillez réessayer";
    }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="new.css">
    <link rel="icon" type="image/x-icon" href="imagePort\iconPort.png"/>
</head>
<body>
<?php include_once "Menu.php"; ?>  
<main>
    <h1 id="titreprincipal">Formulaire</h1>
    <form id="contact" method="post" action="">
	    <fieldset>
            <legend>Vos coordonnées</legend>
		        <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" placeholder="entrez votre nom"/></p>
		        <p><label for="email">Email :</label><input type="text" id="email" name="email" placeholder="entrez votre email" /></p>
	    </fieldset>
	    <fieldset>
            <legend>Votre message :</legend>
	<!--	<p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" /></p> -->
		        <p><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
	    </fieldset>
	        <div style="text-align:center;"><input id="bouton" type="submit" value="Envoyer le formulaire !" /></div>
    </form>
</main>
<footer>
    <p id="CR">&copy; JB</p>
</footer> 
</body>
</html>