<?php
require('connect.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $requete = $connexion->prepare("DELETE FROM taches WHERE id = ?");
    $requete->execute([$id]);
}
?>
