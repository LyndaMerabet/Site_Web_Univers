<?php
session_start();

$_SESSION = array();

session_destroy();

header("Location: accueil1.html");
exit();
?>
