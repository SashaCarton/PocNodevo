<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "poc_films";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête pour obtenir les films
$sql = "SELECT titre, description, image FROM films";
$result = $conn->query($sql);

// Tableaux de mots pour générer des titres et des descriptions
$adjectifs = ['Grand', 'Petit', 'Rapide', 'Lent', 'Fort', 'Faible'];
$noms = ['Chien', 'Chat', 'Cheval', 'Lion', 'Tigre', 'Ours'];
$actions = ['Court', 'Saute', 'Nage', 'Vole', 'Crie', 'Dort'];


 include 'assets\pages\header.html';  // Include header.php file
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poc</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\pages\header.css">
</head>
<body>
    <div class="container">
        <h1>SORTIES DE LA SEMAINE</h1>
        <div class="inner-container">
            <?php
            // Générer le HTML
            while ($row = $result->fetch_assoc())
            {
                echo '<div class="film">';
                echo '<img src="assets/images/2118693.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpg">';
                echo '<h2>' . $row['titre'] . '</h2>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<button class="trailer-button">BANDE ANNONCE</button>';
                echo '</div>';
            }

            // Générer un titre et une description aléatoires
            $titre = $adjectifs[array_rand($adjectifs)] . ' ' . $noms[array_rand($noms)];
            $description = 'Ce film parle d\'un ' . strtolower($titre) . ' qui ' . strtolower($actions[array_rand($actions)]) . '.';

            // Préparer la requête SQL
            $sql = "INSERT INTO films (titre, description) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            // Exécuter la requête SQL
            $stmt->bind_param("ss", $titre, $description);
            $stmt->execute();

            ?>
        </div>
    </div>
    <div class="footer">
        <button id="loadMore">Voir plus de résultats</button>
    </div>
    <script>
        var films = document.querySelectorAll('.film');

        for (var i = 4; i < films.length; i++) {
            films[i].style.display = 'none';
        }

        document.getElementById('loadMore').addEventListener('click', function() {
            // Compter combien de films sont actuellement affichés
            var count = 0;
            for (var i = 0; i < films.length; i++) {
                if (films[i].style.display === 'block') {
                    count++;
                }
            }

            // Afficher 4 films supplémentaires
            for (var i = count; i < count + 4 && i < films.length; i++) {
                films[i].style.display = 'block';
            }
        });
    </script>
</body>
</html>
