<?php
require('connect.php');
$xml = simplexml_load_file("taches.xml");
foreach ($xml->tache as $t) {
    $texte = (string)$t;
    $requete = $connexion->prepare("INSERT INTO taches (tache) VALUES (?)");
    $requete->execute([$texte]);
}
?>
