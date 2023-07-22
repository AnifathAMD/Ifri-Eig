<?php 
session_start();
$_SESSION['commandes'] = [];
header('Location:commande.php?vider_panier=true');