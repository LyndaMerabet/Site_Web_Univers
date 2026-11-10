<?php
session_start();
include 'fonction.php';
$connection = connexion();                
if(isset($_GET['comm']) && !empty($_GET['comm'])){
    if(isset($_SESSION['id_utili'])){
        $id_utilisateur = $_SESSION['id_utili'];
        $commentaire = $_GET['comm'];
        $id_produit=$_GET['idp'];
        $req = "INSERT INTO commentaires (id_utilisateur, contenu, id_produit) VALUES ('$id_utilisateur', '$commentaire', '$id_produit')";
        $data = requete($connection,$req);
        if($data){
            header("Location:boutique.php");
            exit(); 
        } else {
            echo "Erreur lors de l'enregistrement du commentaire.";
        }
    } else {
        
        header("Location:connexion.php");
        exit(); 
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'univers et ses mystères</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<video autoplay muted loop id="video-bg" >
       <source src="Ciel étoilé, Fond d'écran animé.webm" type="video/webm" >
    </video>
 
     <div id="header" >
          <h1>Votre boutique en ligne</h1>
             <a href="connexion.php">Connexion/Inscription</a>
             <a href="accueil1.html">Accueil</a>
             <a href="qcm2.html">QCM?</a>
             <a href="boutique.php">Boutique</a>
             <a href="panier.php" class="link">Panier<span class="quantite"> 
             <?php
                    if(isset($_SESSION['panier'])){
                        $nb_articles=array_sum($_SESSION['panier']) ;
                        echo $nb_articles;
                    }else{
                        echo 0;
                    }
              ?> 
             </span></a> 
      </div> 
 
      <div id="left">
                <?php
                $req=" SELECT * FROM produits ";
                $data = requete($connection,$req);

                if ($data) {
                    while ($row = $data->fetch_assoc()) {
                        echo '<img src="' . $row['image_produit'] . '" alt="article" class="image"><br> ';
                        echo '<h2>' . $row["nom_produit"] . '</h2>';
                        echo '<p><strong>Prix : </strong>' . $row["prix"] . ' €</p>';
                        echo '<p><strong>Stock : </strong>' . $row["stock"] . '</p>';
                        echo '<p>Informations sur le fournisseur : </p>';
                        echo '<ul>';
                        $req2 = "SELECT nom_four, adresse, contact, email FROM fournisseur WHERE id_fourn = " . $row['id_fourn'];
                        $data2 = requete($connection, $req2);
                        $row2 = $data2->fetch_assoc();
                        echo '<li><strong>Nom :</strong> ' . $row2['nom_four'] . '</li>';
                        echo '<li><strong>Adresse :</strong> ' . $row2['adresse'] . '</li>';
                        echo '<li><strong>Contact :</strong> ' . $row2['contact'] . '</li>';
                        echo '<li><strong>Email :</strong> ' . $row2['email'] . '</li>';
                        echo '</ul>';

                       
                    }
                } else {
                    echo "Aucun produit trouvé.";
                }
                ?>
      </div>

      <div id="right"> 
                <?php 
                     $data = requete($connection,$req);
                     while($row = $data->fetch_assoc()){
                        echo '<div class="BTN">';

                        echo "<p>";
                        echo '<a href="ajouter_panier.php?idp= '.$row['id_produit']. '" class="link" > Ajouter au panier</a>';
                        echo "</p>";

                        echo "<p>";
                        echo '<a href="avis.php?id_p= '.$row['id_produit']. '" class="link" > Voir les avis</a>';
                        echo "</p>";

                        echo '<form action="boutique.php" method="get" >';
                        echo '<input type="hidden" name="idp" value="' .$row['id_produit']. '"> ';
                        echo '<textarea id="myTextarea" rows="5" cols="50" name="comm" > </textarea>';
                        echo    '<input type="submit" value="Envoyer" class="link">';
                        echo '</form>';
                        echo '</div>';

                    }
                    ?> 
      </div>
</body>
</html>
