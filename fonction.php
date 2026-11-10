<?php
function connexion()
{
	// ouverture de connexion
	$connection = mysqli_connect("localhost", "root", "root", "projet1");	// force l'envoie de caractète au format UTF8
	mysqli_set_charset($connection , 'utf8');
	// si erreur de connexion
	if ( mysqli_connect_errno()) die("<p>Echec lors de la connexion MySQL</p>");
	return $connection;
}

function close($co)
{
	mysqli_close($co);
}

function requete($co,$req)
{
	$d = mysqli_query($co, $req);
	return $d;
}


?>