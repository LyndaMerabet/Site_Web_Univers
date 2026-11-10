<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'univers et ses mystères</title>
    <link rel="stylesheet" href="qcm.css">
</head>
<body>
<a href="accueil1.html">Retour</a>

    <h2>Résultats de votre QCM !</h2>
    <?php
        $note=0;

    include "fonction.php";
    $connection = connexion();
    foreach($_POST as $cle=>$val){

        $req="select est_correcte from reponses where $val=num_reponse";
        $data=requete( $connection,$req);
        $row = $data->fetch_assoc();
        $note=$note+$row['est_correcte'];
    }

    if($note==5){
        echo "<p>Excellent travail! Tu as eu 5/5,<br> Félicitations tu as maintenant une très bonne base en astronomie! </p> ";
    }
    else{
        if($note>2){
            echo"<p>Très bon travail! Tu as eu $note/5,<br> la prochaine fois tu trouveras tous correct certainement!</p>";
        }
        else{
            echo "<p>Oups! Tu as eu $note/5,<br> Concentres toi plus la prochaine fois, tu peux le faire. </p>";
        
        }
    }
    close($connection);

    ?>



</body>
</html>