<?php
session_start();
include 'fonction.php';

if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    unset($_SESSION['panier'][$id_del]);
   }
 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qcm.css">
    <title>L'univers et ses mystères</title>
</head>
<body class="panier">
  <center><a href="boutique.php" class="link">Boutique</a></center>  
    <br>
    <section>
    <table>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Action</th>
        </tr>


        <?php
        $connection = connexion();
        $total = 0;
                             //recuperer les ids des produits qui sont dans le panier   
            if(isset($_SESSION['panier'])) {     
        $identifiants_produits = array_keys($_SESSION['panier']);

        if(empty($identifiants_produits)){
            echo '<tr><td colspan="4">Votre panier est vide.</td></tr>';
        } else {
                    // Convertir ces ids en une chaîne séparée par des virgules pour la clause IN de la requête SQL

            foreach($_SESSION['panier'] as $produit_id => $quantite){
                $req = "SELECT * FROM produits WHERE id_produit = $produit_id";
                $data = requete($connection, $req);
                $row = $data->fetch_assoc();
           
                echo '<tr>';
                echo '<td><img src="' . $row['image_produit'] . '" alt="produit"></td>';  
                echo '<td>' . $row['nom_produit'] . '</td>';  
                echo '<td>' . $row['prix'] . '</td>';  
                echo '<td>' . $quantite . '</td>';
                echo '<td><a href="panier.php?del=' .$produit_id. '"><img src="supp.jpg"></a> </td>';  
                echo '</tr>';
            
                $total += $row['prix'] * $quantite;
            }
        }
        echo '<tr><th> TOTAL : ' . $total. '</th></tr>';
       echo '<tr><th><form action="acheter.php" method="post">
            <input type="hidden" name="total" value="'.$total.'" >
            <input type="submit" value="Acheter" class="link" >
        </form></th></tr>';
    }
        ?>
    </table>
    </section>
</body>
</html>
