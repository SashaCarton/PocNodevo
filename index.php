<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poc</title>
</head>
<body>
    <div class="container">
        <h1>SORTIES DE LA SEMAINE</h1>
        <div id="inner-container">
            <?php
            // Connexion à la base de données
            $host = 'localhost';
            $db   = 'nom_de_la_base_de_donnees';
            $user = 'username';
            $pass = 'password';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $pdo = new PDO($dsn, $user, $pass);

            // Requête pour obtenir les films
            $sql = "SELECT titre, description, image FROM films";
            $stmt = $pdo->query($sql);

            // Générer le HTML
            while ($row = $stmt->fetch())
            {
                echo '<div class="film">';
                echo '<img src="' . $row['image'] . '" alt="' . $row['titre'] . '">';
                echo '<h2>' . $row['titre'] . '</h2>';
                echo '<p>' . $row['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
