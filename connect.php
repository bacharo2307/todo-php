<?php
try {
    $connexion = new PDO("mysql:host=localhost;dbname=projet_todoliste", "root", "Bacharou2307");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erreur) {
    echo "Erreur de connexion : " . $erreur->getMessage();
    exit();
}
?>
