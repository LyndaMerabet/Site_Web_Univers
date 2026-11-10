<?php
session_start();

if(isset($_POST['button2'])){

if (isset($_POST['nom2']) && isset($_POST['mdp2'])){
    include 'fonction.php';
     $connection = connexion();
     $utili=$_POST['nom2'];
     $pwd=$_POST['mdp2'];
     $req ="select * from utilisateurs where password= '$pwd' and nom_utilisateur='$utili'";
     $data = requete($connection,$req);

     if ($data && $row = mysqli_fetch_assoc($data)){
        $_SESSION['nom_utilisateur'] = $utili;
        $_SESSION['mdp']=$pwd;
        $_SESSION['id_utili']=$row['id_utilisateur'];
        header('Location: accueil1.html');
        exit();
   
     }

 else{
    $error='<p class="erreur">Nom d\'utilisateur ou mot de passe incorrect</p>';
    }
close($connection);
}}
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
            <div class="formulaire">
                <h2>Connexion</h2>
                <?php
                    if(isset($error)){
                        echo "<p >".$error."</p>" ;
                    }

                ?>
                <form action="connexion.php" method="post">
                <div class="input_box">
                    <input type="text" name="nom2" placeholder="nom d'utilisateur" size="20" required>
                </div>
                <div class="input_box">
                     <input type="password" name="mdp2" placeholder="mot de passe" required>
                </div>
                <button type="submit" name="button2">connexion</button>
              </form>
            </div>
        </div>
    
    
        <div id="right">
            <div class="formulaire">
                    <form action="a.php" method="post">
                    <h2>Inscription</h2>

                    <div class="input_box">
                        <input type="text" name="nom" placeholder="Entrez un nom d'utilisateur" size="20" required >
                    </div>   
                    <div class="input_box">   
                        <input type="password" name="mdp" placeholder="Entrez un mot de passe"  title="votre mot de passe doit contenir au moins une miniscule, une majuscule, un chiffre et un caractère spécial ! ? @ # $ & * " pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$&*?!]).+$" required>
                    </div>
 <!--
^ : Début de la chaîne.
(?=.*[a-z]) : Assertion positive de recherche en avant pour garantir la présence d'au moins une minuscule.
(?=.*[A-Z]) : Assertion positive de recherche en avant pour garantir la présence d'au moins une majuscule.
(?=.*\d) : Assertion positive de recherche en avant pour garantir la présence d'au moins un chiffre.
(?=.*[@#$&*?!]) : Assertion positive de recherche en avant pour garantir la présence d'au moins un caractère spécial parmi @, #, $, &, *, ? et !.
.+ : Correspond à n'importe quel caractère (sauf nouvelle ligne) apparaissant au moins une fois.
$ : Fin de la chaîne-->

        
                    <button type="submit" name="button">inscription</button>
       
                  
                  </form>
                </div>
            </div>
            


        
</body>
</html>