
<?php
session_start();
if(!isset($_SESSION['id_utili'])){
    header("Location: connexion.php");
    exit;
}

include 'fonction.php';
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

if (isset($_GET['idp'])) {
    $produit_id = $_GET['idp'];
    $connection = connexion();                
    $req="select stock from produits where id_produit=$produit_id";
    
    $data=requete($connection,$req);
    $row=mysqli_fetch_assoc($data);

    if($row['stock']==0){
        echo "Rupture de stock <br><br>"; 
       echo '  <a href="boutique.php">Retour</a>';
    }

    else{
        $stock_actuel=$row['stock'];
        $nouveau_stock= $stock_actuel-1;
        $req_stock = "UPDATE produits SET stock = $nouveau_stock WHERE id_produit = $produit_id";
        $data_stock=requete($connection,$req_stock);

        if(isset($_SESSION['panier'][$produit_id])){
        $_SESSION['panier'][$produit_id]++; 


         }else {
        $_SESSION['panier'][$produit_id]= 1 ;
         }

  
        header("Location:boutique.php");
        exit();// Sortir du script après la redirection
    }

  }
?>
