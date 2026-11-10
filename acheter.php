<?php
session_start();
if(isset($_POST['btn'])){
    echo "<p>Paiment effectué</p>";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'univers et ses mystères</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<body>
   
<h2>Finaliser l'achat</h2>
    
    <form action="acheter.php" method="post">

        <label for="total" class="style">Total à payer :</label>
        <input type="text" id="total" name="total" value="<?php echo isset($_POST['total']) ? $_POST['total'] : ''; ?>" readonly><br><br>
        
        <h3>Informations de livraison</h3>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="adresse">Adresse :</label>
        <textarea id="adresse" name="adresse" required></textarea><br><br>
        
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" required><br><br>
        
        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal" required><br><br>
        
        <h3>Informations de paiement</h3>
        <label for="carte_credit">Carte de crédit :</label>
        <input type="text" id="carte_credit" name="carte_credit" required><br><br>
        
        <label for="date_expiration">Date d'expiration :</label>
        <input type="text" id="date_expiration" name="date_expiration" required><br><br>
        
        <label for="code_security">Code de sécurité :</label>
        <input type="text" id="code_security" name="code_security" required><br><br>
        
        <button type="submit" name="btn">Confirmer l'achat</button>
    </form>
    
    <?php
?>

</body>
</html>