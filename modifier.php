<?php
require('connect.php');

if (!empty($_POST['identifiant']) && !empty($_POST['texte_tache'])) {
    $id = $_POST['identifiant'];
    $texte = $_POST['texte_tache'];
    $requete = $connexion->prepare("UPDATE taches SET tache = ? WHERE id = ?");
    $requete->execute([$texte, $id]);
}
?>
