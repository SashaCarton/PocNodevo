<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poc</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>SORTIES DE LA SEMAINE</h1>
        <div class="inner-container">
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

            // Générer le HTML
            while ($row = $result->fetch_assoc())
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
