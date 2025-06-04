<?php
require('connect.php');

if (!empty($_POST['texte_tache'])) {
    $texte = $_POST['texte_tache'];
    $requete = $connexion->prepare("INSERT INTO taches (tache) VALUES (?)");
    $requete->execute([$texte]);
}
?>
