<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'univers et ses mystères</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<body>

<a href="boutique.php">Retour</a>

<?php
        include 'fonction.php';
        $connection = connexion();

     if(isset($_GET['id_p'])){
        $idp=$_GET['id_p'];

        $req = "SELECT commentaires.contenu, utilisateurs.nom_utilisateur, produits.nom_produit  
        FROM commentaires, utilisateurs, produits 
        WHERE produits.id_produit = $idp
        AND commentaires.id_produit = produits.id_produit
        AND commentaires.id_utilisateur = utilisateurs.id_utilisateur";
        $data = requete($connection, $req);
        $test=0;
        if ($data->num_rows > 0) {
            while ($row = $data->fetch_assoc()) {
                if($test==0){
                    echo "<h2>Les avis sur le produit : " . $row['nom_produit'] . "</h2>";  
                                       $test=1;
                    echo '<ul>';
                    echo '<li>  <span class="style2">' . $row['nom_utilisateur'] . ' </span>: <br><span class="style1">  ' . $row['contenu'] . '</span></li>';

                }
                else{
                echo '<li>  <span class="style2">' . $row['nom_utilisateur'] . ' </span>: <br><span class="style1">  ' . $row['contenu'] . '</span></li>';
                 } }
            echo '</ul>'; 
        } else {

            echo "<h2>Les avis sur le produit : </h2>";  
            echo '<p class="style2">Aucun avis disponible pour le moment </p>';
        }}
        ?>
   
</body>
</html>