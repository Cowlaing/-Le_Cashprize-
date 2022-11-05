<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sélectionnez vos critères écoresponsable et créer votre projet !">
    <meta name="keywords" content="eco-conception, bonnes pratiques">
    <meta name="author" content="Le Cashprize D4G2021">
    <title>D4G2021 - Projet - Le Cashprize team</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/planete2.png">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>

<body>
    <!--Header PHP-->
    <?php include 'header.php';  ?>

    <!-- PARTIE GAUCHE -->
    <section class="container">
        <div class="columns">
            <div class="aside">
                <div class="component">
                    <form class="content" data-screen-only>
                        <h2 class="titre">Trier</h2>
                        <fieldset>
                            <legend>Famille</legend>
                            <ol id="categories" class="test">
                                <li>
                                    <a href="#0">Strategie</a>
                                </li>
                                <li>
                                    <a href="#1">Specifications</a>
                                </li>
                                <li>
                                    <a href="#2">UX/UI</a>
                                </li>
                                <li>
                                    <a href="#3">Contenus</a>
                                </li>
                                <li>
                                    <a href="#4">Architecture</a>
                                </li>
                                <li>
                                    <a href="#4">Frontend</a>
                                </li>
                                <li>
                                    <a href="#4">Backend</a>
                                </li>
                                <li>
                                    <a href="#4">Hébergement</a>
                                </li>
                            </ol>


                        </fieldset>

                    </form>

                </div>
            </div>
            <article class="main">
                <h2 class="titre">Les pratiques séléctionnées</h2>
                <p class="titre">Sélectionnez les bonnes pratiques que vous souhaitez ajouter à votre projet parmis les 491 critères du référentiel INR.</p>

                <!--Liste des catégories de pratiques-->
                <h4 id="0">Strategie</h4>
                <ul class="strategie">
                    <li class="Item">
                        <a name="type[]" id="#1" value="front" onload="gestionFiltre('UX/UI')">test
                    </a>
                    </li>
                    <ul id="ulp">
                    <!--ECRIRE ICI bonnes pratiques-->

                </ul>
                </ul>
                <h4 id="1">Specifications</h4>
                <h4 id="2">UX/UI</h4>
                <h4 id="3">Contenus</h4>
                <h4 id="4">Architecture</h4>
                <h4 id="5">Frontend</h4>
                <h4 id="6">Backend</h4>
                <h4 id="7">Hébergement</h4>



                <ul id="ulp">
                    <!--ECRIRE ICI bonnes pratiques-->

                </ul>

            </article>

            <script src="main.js"></script>
        </div>
    </section>

    <!--Footer PHP-->
    <?php include 'footer.php';  ?>
</body>

</html>