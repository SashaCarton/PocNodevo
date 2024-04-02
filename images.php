<?php
$host = 'localhost';
$db   = 'nom_de_la_base_de_donnees';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

// Chemin vers le fichier image
$imagePath = 'chemin/vers/votre/image.jpg';

// Lire le contenu du fichier image
$imageData = file_get_contents($imagePath);

// Préparer la requête SQL
$sql = "INSERT INTO films (titre, description, image) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Exécuter la requête SQL
$stmt->execute(['Titre du film', 'Description du film', $imageData]);
?>