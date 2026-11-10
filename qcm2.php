<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Univers et ses Mystères</title>
    <link rel="stylesheet" type="text/css" href="qcm.css">
</head>
<body>
 

<form action="reponse.php" method="post">

<?php


if(isset($_POST['niveau'])) {
    $niveau = $_POST['niveau'];
    echo '<h2> QCM niveau ' . $niveau . ' </h2>';
    $req = "select 	* from question where difficulte ='$niveau' ORDER BY rand() limit 5";

    include 'fonction.php';
    $connection = connexion();
    $data = requete($connection,$req);
    
    echo '<ol>';

    while ($row = $data->fetch_assoc())
		{
			$qst = $row['texte_question'];
			echo"<li><strong> $qst </strong></li><br>";
            $id_question= $row['num_question'];
            $req2="select * from reponses where num_question=$id_question";
            $data2=requete($connection,$req2);
                while($row2 = $data2->fetch_assoc()){
                   echo '<input type="radio" name="' .$id_question. '" value="' .$row2['num_reponse']. '" required><span class="style">' .$row2['texte']. '</span><br>'; 
                }
		}
		
        echo '</ol>';
    close($connection);
    
}
?>

<button type="submit">valider</button>

</form>


















</body>
</html>


