<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="burger_menu.css">
    <link rel="stylesheet" href="searchbar.css">
    <link rel="stylesheet" href="carrousel.css">
    <link rel="stylesheet" href="header.css">
</head>

<?php require 'header.php'; ?>

<body>
    <h1> Ajouter un article sur le e-commerce </h1>
    <form action="connect.php" method="post">
        <label for="name">Nom de l'article </label>
        <input type="text" id="name" name="name" placeholder="Entrez le nom de l'article" required><br><br>

        <label for="email"> Autheur </label>
        <input type="email" id="email" name="email" placeholder="Entrez l'e-mail de l'auteur" required><br><br>

        <label for="message"> Contenu de l'article </label><br>
        <textarea id="message" name="message" rows="4" cols="50" placeholder="Entrez le contenu de l'article" required></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php require 'footer.php'; ?>
    <script src="burger_menu.js"></script>

</body>

</html>