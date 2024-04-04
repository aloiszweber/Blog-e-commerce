<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog sur le e-commerce</title>
    <link rel="stylesheet" href="home.css"> <!-- Ajoutez votre fichier CSS ici -->
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="burger_menu.css">
    <link rel="stylesheet" href="searchbar.css">
    <link rel="stylesheet" href="carrousel.css">
    <link rel="stylesheet" href="header.css">
</head>

<?php require 'header.php'; ?>

<body>

    <main>
        <div class="carousel">
            <div class="slides">
                <img src="1.jpg" alt="Image 1">
                <img src="2.jpg" alt="Image 2">
                <img src="3.jpg" alt="Image 3">
                <!-- Ajoutez plus d'images selon vos besoins -->
            </div>
            <button class="prev">Précédent</button>
            <button class="next">Suivant</button>
        </div>

        <section>
            <h2>Bienvenue sur notre blog sur le e-commerce !</h2>
            <p>Découvrez ici tout ce que vous devez savoir sur le fonctionnement du e-commerce.</p>
            <p>Le e-commerce, ou commerce électronique, désigne l'achat et la vente de biens ou de services sur Internet. Il englobe un large éventail d'activités, telles que la vente de produits physiques, de services numériques, de billets d'avion, de réservations d'hôtel, etc.</p>
            <p>Grâce au e-commerce, les entreprises peuvent atteindre un public mondial sans les contraintes géographiques des magasins physiques. Les consommateurs bénéficient également d'une plus grande commodité et d'un accès 24 heures sur 24 aux produits et services qu'ils désirent.</p>
            <p>Que vous soyez un entrepreneur cherchant à démarrer une entreprise en ligne ou un consommateur curieux des dernières tendances et technologies du e-commerce, notre blog est votre ressource ultime.</p>
        </section>
        <section>
            <h2>Comment fonctionne le e-commerce ?</h2>
            <p>Le e-commerce repose sur un ensemble de technologies et de processus qui permettent aux entreprises de vendre des produits et aux consommateurs de les acheter en ligne. Voici les principaux aspects du fonctionnement du e-commerce :</p>
            <ul>
                <li><strong>Plateforme de vente en ligne :</strong> Les entreprises utilisent des plateformes de commerce électronique pour mettre en ligne leurs produits et services.</li>
                <li><strong>Paiement sécurisé :</strong> Les transactions sont sécurisées par des systèmes de paiement en ligne, tels que PayPal, Stripe, ou les passerelles de paiement intégrées.</li>
                <li><strong>Gestion des stocks et des commandes :</strong> Les entreprises gèrent leur inventaire et traitent les commandes via des systèmes de gestion des stocks et des commandes.</li>
                <li><strong>Expédition et logistique :</strong> Une fois la commande passée, les produits sont expédiés aux clients via des services de livraison.</li>
                <li><strong>Service client :</strong> Les entreprises fournissent un support client pour répondre aux questions et résoudre les problèmes des clients.</li>
            </ul>
        </section>

        <section>
            <h2>Histoire du e-commerce</h2>
            <p>Le e-commerce a une histoire fascinante qui remonte aux premières formes de commerce à distance. Voici quelques points clés dans l'évolution du e-commerce :</p>
            <ul>
                <li><strong>Début du commerce électronique :</strong> Le premier achat en ligne a eu lieu en 1994, lorsque Phil Brandenberger a acheté un CD de Sting par le biais de NetMarket, une plateforme créée par Daniel Kohn et Dan O'Neill.</li>
                <li><strong>Boom du commerce électronique :</strong> Au cours des années suivantes, le e-commerce a connu une croissance exponentielle avec l'émergence de géants comme Amazon, eBay et Alibaba.</li>
                <li><strong>Technologies et innovations :</strong> Des avancées telles que les systèmes de paiement en ligne sécurisés, les moteurs de recherche améliorés, et les plateformes de commerce électronique conviviales ont contribué à stimuler la croissance du e-commerce.</li>
                <li><strong>Expansion mondiale :</strong> Le e-commerce a transcendé les frontières géographiques, permettant aux entreprises de vendre à un public mondial et aux consommateurs d'accéder à une gamme diversifiée de produits provenant du monde entier.</li>
                <li><strong>Évolution continue :</strong> Aujourd'hui, le e-commerce continue d'évoluer avec l'adoption de technologies telles que l'intelligence artificielle, la réalité augmentée et la blockchain, qui façonnent l'avenir du commerce en ligne.</li>
            </ul>
        </section>

    </main>

    <?php require 'footer.php'; ?>

    <script src="burger_menu.js"></script>
    <script src="carrousel.js"></script>

    <script>
        // Récupérer le paramètre GET "success"
        const urlParams = new URLSearchParams(window.location.search);
        let successParam = urlParams.get('success');

        // Vérifier si le paramètre "success" est défini à 1 (succès)
        if (successParam === '1') {
            // Attendre 500 millisecondes avant d'afficher le pop-up
            setTimeout(function() {
                alert("Votre article sur le e-commerce a été ajouté avec succès !");
            }, 500);

            // Réinitialiser le paramètre GET "success" à 0 dans l'URL
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set('success', '0');
            const newUrl = window.location.pathname + '?' + urlParams.toString();
            window.history.replaceState({}, '', newUrl);

        }
    </script>

    <?php $_GET['success'] = 0; ?>

</body>

</html>