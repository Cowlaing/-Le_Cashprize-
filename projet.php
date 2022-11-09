<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sélectionnez vos critères écoresponsable et créer votre projet !">
    <meta name="keywords" content="eco-conception, bonnes pratiques">
    <meta name="author" content="Le Cashprize D4G2021">
    <meta name="theme-color" content="#7c5dba" />
    <title>D4G2021 - Projet - Le Cashprize team</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="preload" href="Roboto-Regular.ttf" as="font" type="font/ttf" crossorigin>
</head>

<body id="top">
    <!--Header PHP-->
    <?php include 'header.php';  ?>
    <section class="container">
        <h2 class="titre">Projet</h2>
    </section>

    <!-- PARTIE GAUCHE (SELECTION CRITERES) -->
    <section class="container">
        <div class="columns">
            <div class="aside">
                <div class="component">
                    <form class="content" data-screen-only>
                        <h2 class="titre">Cycle de vie</h2>
                        <fieldset class="style">
                            <ul>
                                <li>
                                    <a href="#0" input type="button" value="Acquisition" class="menu">Acquisition</a>
                                </li>
                                <li>
                                    <a href="#1" input type="button" value="Conception" class="menu">Conception</a>
                                </li>
                                <li>
                                    <a href="#2" input type="button" value="Réalisation" class="menu">Réalisation</a>
                                </li>
                                <li>
                                    <a href="#3" input type="button" value="Déploiement" class="menu">Déploiement</a>
                                </li>
                                <li>
                                    <a href="#4" input type="button" value="Administration" class="menu">Administration</a>
                                </li>
                                <li>
                                    <a href="#5" input type="button" value="Utilisation" class="menu">Utilisation</a>
                                </li>
                                <li>
                                    <a href="#6" input type="button" value="Maintenance" class="menu">Maintenance</a>
                                </li>
                                <li>
                                    <a href="#7" input type="button" value="FinDeVie" class="menu">Fin de Vie</a>
                                </li>
                                <li>
                                    <a href="#8" input type="button" value="Revalorisation" class="menu">Revalorisation</a>
                                </li>
                                <li>
                                    <a href="#9" input type="button" value="N/A" class="menu">N/A</a>
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                    <div class="viderPanier">
                        <input id="viderPanier" name="viderPanier" type="button" class="Button" onclick="vider()" value="Vider le panier" />
                    </div>
                </div>
            </div>
            <div class="traith1"></div>
            <!--trait séparateur-->
            <article class="main">
                <h2 class="titre">Les pratiques séléctionnées</h2>
                <p class="titre">Voici la liste des bonnes pratiques que vous avez rentré dans votre panier.</p>
                <!--Liste des catégories de pratiques-->
                <h2 id="0" class="criteres">Acquisition</h2>
                <ul id="acqui"></ul>

                <h2 id="1" class="criteres">Conception</h2>
                <ul id="concep"></ul>

                <h2 id="2" class="criteres">Réalisation</h2>
                <ul id="rea"></ul>

                <h2 id="3" class="criteres">Déploiement</h2>
                <ul id="deploi"></ul>

                <h2 id="4" class="criteres">Administration</h2>
                <ul id="admi"></ul>

                <h2 id="5" class="criteres">Utilisation</h2>
                <ul id="util"></ul>

                <h2 id="6" class="criteres">Maintenance</h2>
                <ul id="maintenance"></ul>

                <h2 id="7" class="criteres">Fin de Vie</h2>
                <ul id="end"></ul>

                <h2 id="8" class="criteres">Revalorisation</h2>
                <ul id="revalo"></ul>

                <h2 id="9" class="criteres">N/A</h2>
                <ul id="N/A"></ul>
            </article>
    </section>

    <!--Bouton top-->
    <a href="#top" aria-label="Link to go to top" data-screen-only>
        <button class="top" aria-label="Button go to top"></button>
    </a>
    <!--Footer PHP-->
    <?php include 'footer.php';  ?>
    <script src="gestionPanier.js"></script>
</body>

</html>