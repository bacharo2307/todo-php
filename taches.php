<?php
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'supprimer_tout') {
    $connexion->exec("DELETE FROM taches");
    exit();
}

$requete = $connexion->query("SELECT * FROM taches ORDER BY id");
foreach ($requete as $ligne) {
    $texte = htmlspecialchars($ligne['tache']);
    $id = $ligne['id'];
    echo "<div class='tache'>
            <span>$id -  $texte</span>
            <button onclick='modifierTache($id)'>Modifier</button>
            <button onclick='supprimerTache($id)'>Supprimer</button>
          </div>";
}
?>
