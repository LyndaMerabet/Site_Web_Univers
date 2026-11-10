<?php

session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>L'Univers et ses Mystères</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>


<video autoplay muted loop id="video-bg" >
       <source src="Ciel étoilé, Fond d'écran animé.webm" type="video/webm" >
    </video>


<div id="header" >
         <h1>Bienvenue sur le site d'Astronomie</h1>
            <a href="connexion.php">Connexion/Inscription</a>
            <a href="accueil1.html">Accueil</a>
            <a href="qcm2.html">QCM?</a>
            <a href="boutique.php">Boutique</a>

     </div>



     <div id="left">

<?php
include 'fonction.php';
$connection = connexion();
if (isset($_POST['nom']) && isset($_POST['mdp'])){
    $utilisateur=$_POST['nom'];
    $motdepasse=$_POST['mdp'];
    $req ="insert into utilisateurs (nom_utilisateur,password) values ('$utilisateur','$motdepasse')";
    $data = requete($connection,$req);


    if ($data) {
        echo "<p>Félicitations ! Votre inscription a été réussie. Vous pouvez maintenant vous connecter avec votre nom d'utilisateur et votre mot de passe.</p>";
        echo "<a href='connexion.php'>Se connecter</a>";
    } else {
        echo "<p>Oups! Une erreur s'est produite. Veuillez réessayer.</p>";
    }
close($connection);	
}


?>
</div>

<div id="right">
<img src="welcome.jpg" alt="welcome">
 </div>



</body>
</html>