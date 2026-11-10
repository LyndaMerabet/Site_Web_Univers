<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Univers et ses Mystères</title>
    <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
<video autoplay muted loop id="video-bg" >
       <source src="Ciel étoilé, Fond d'écran animé.webm" type="video/webm" >
    </video>
    <div id="header">
        <?php
        include 'fonction.php';
        $connection = connexion();
        $number = $_GET['parametre1'];
        $req="select nom from planetes where $number=num_planete";
        $data = requete($connection,$req);

        while($row = $data->fetch_assoc())
             echo " <h1>{$row['nom']}</h1> ";
   ?>
         <a href="connexion.php">Connexion/Inscription</a>
         <a href="accueil1.html">Accueil</a>
         <a href="qcm2.html">QCM?</a>
         <a href="boutique.php">Boutique</a>

    </div>

     <div id="left">

        <?php

             $number = $_GET['parametre1'];
             $req="select diametre AS Diamètre, masse AS Masse, distance_soleil AS 'Distance jusqu''au Soleil', periode_orbitale AS 'Periode orbitale', nombre_lunes AS 'Nombre de lunes', gravite AS Gravité,description from planetes where $number=num_planete";
             $data = requete($connection,$req);


             if ($data) {
            while($row = $data->fetch_assoc()){
                echo '<p>' .$row['description']. '</p> <br> ';
                echo "<ul>\n ";
               foreach($row as $cle=>$val){
                if($cle != 'description')
                     echo '<li><span>' .$cle. '</span> : ' .$val. '</li>' ;
                    }
               echo "</ul>\n <br><br><br> ";


               $req1="select image_even from evenement_astronomique  where $number=num_planete";
               $data1=requete($connection,$req1);
               if ($data1) {
                while($row1 = $data1->fetch_assoc()){
                    echo '<p><img src="' .$row1['image_even']. '" alt="event" ></p> <br><br><br>';
               }
         
            }
        
    }
}else{
        echo "Aucun résultat trouvé pour le numéro de planète $number.";
    }
        ?>

     </div>

     <div id="right">

     <?php
        $req="select image from planetes where $number=num_planete";
        $data=requete($connection,$req);
        while($row = $data->fetch_assoc()){
             echo '<img src="' .$row['image']. '" alt="planete" > ';
        }
    
        $req1="select nom_event , date_event AS 'Date de l''événement', description_event from evenement_astronomique  where $number=num_planete";
        $data2 = requete($connection,$req1);
        if ($data2) {
         while($row = $data2->fetch_assoc()){
           echo '<br><h1>' .$row['nom_event']. '</h1><br>';
           echo '<p>' .$row['description_event']. '</p> <br> ';
           echo "<ul>\n ";
          foreach($row as $cle=>$val){
           if($cle != 'description_event' && $cle!='nom_event' )
                echo "<li> $cle : $val </li>" ;
               }
          echo "</ul>\n <br><br><br>";
        
         }
        }



     ?>

     </div>
</body>
</html>  