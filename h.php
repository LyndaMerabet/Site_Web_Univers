
<?php

include 'fonction.php';
if(!isset($_SESSION)){
    session_start();
}
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

if (isset($_GET['idp'])) {
    $produit_id = $_GET['idp'];
    $connection = connexion();                
    $req="select * from produits where id_produit=$produit_id";
    $data=requete($connection,$req);

    if(empty($row=mysqli_fetch_assoc($data))){
        die("Ce produit n'existe pas");
    }

    if(isset($_SESSION['panier'][$produit_id])){
        $_SESSION['panier'][$produit_id]++; 

    }else {
        $_SESSION['panier'][$produit_id]= 1 ;
    }

  
   header("Location:boutique.php");


  }
?>
