<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles sur le e-commerce</title>
    <link rel="stylesheet" href="articles.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="burger_menu.css">
    <link rel="stylesheet" href="searchbar.css">
</head>

<?php require 'header.php'; ?>

<body>
    <h1>Articles sur le e-commerce</h1>
    <div class="container">
        <?php

        $articles = $_SESSION['donnees'];
        // Array contenant les articles

        // Affichage des articles
        foreach ($articles as $article) {
            echo "<div class='article'>";
            echo "<h2>" . $article['name'] . "</h2>";
            echo "<p>" . $article['email'] . "</p>";
            echo "<p><strong>Message:</strong> " . $article['message'] . "</p>";
            echo "</div>";
        }

        ?>
    </div>

    <?php require 'footer.php'; ?>

    <script src="burger_menu.js"></script>
    <script src="searchbar.js"></script>

</body>

</html>