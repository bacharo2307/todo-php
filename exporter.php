<?php
require('connect.php');

$requete = $connexion->query("SELECT tache FROM taches");
$xml = new SimpleXMLElement('<taches/>');

while ($ligne = $requete->fetch()) {
    $xml->addChild('taches', $ligne['tache']);
}

Header('Content-type: text/xml');
Header('Content-Disposition: attachment; filename="BABA.xml"');
echo $xml->asXML();
?>
