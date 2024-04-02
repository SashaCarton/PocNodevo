<?php
$host = 'localhost';
$db   = 'poc_films';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

// Chemin vers le fichier image
$imagePath = 'assets/images/2118693.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg';

// Lire le contenu du fichier image
$imageData = file_get_contents($imagePath);

// Préparer la requête SQL
$sql = "INSERT INTO films (titre, description, image) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Exécuter la requête SQL
$stmt->execute(['Titre du film', 'Description du film', $imageData]);
?>