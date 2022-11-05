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
                        <h4 class="titre">Trier</h4>
                        <fieldset class="style">
                            <ol id="categories" class="test">
                                <li>
                                    <menu href="#0">Strategie</menu>
                                </li>
                                <li>
                                    <menu href="#1">Specifications</menu>
                                </li>
                                <li>
                                    <menu href="#2">UX/UI</menu>
                                </li>
                                <li>
                                    <menu href="#3">Contenus</menu>
                                </li>
                                <li>
                                    <menu href="#4">Architecture</menu>
                                </li>
                                <li>
                                    <menu href="#4">Frontend</menu>
                                </li>
                                <li>
                                    <menu href="#4">Backend</menu>
                                </li>
                                <li>
                                    <menu href="#4">Hébergement</menu>
                                </li>
                            </ol>


                        </fieldset>

                    </form>

                </div>
            </div>
            <div class="traith1"></div>
    


            <article class="main">
                <h4 class="titre">Les pratiques séléctionnées</h4>
                <p class="titre">Sélectionnez les bonnes pratiques que vous souhaitez ajouter à votre projet parmis les 491 critères du référentiel INR.</p>

                <!--Liste des catégories de pratiques-->
                <h2 id="0">Strategie</h2>
                <ul class="strategie">
                    <li class="Item">
                        <a name="type[]" id="#1" value="front" onload="gestionFiltre('UX/UI')">test
                    </a>
                    </li>
                    <ul id="ulp">
                    <!--ECRIRE ICI bonnes pratiques-->

                </ul>
                </ul>
                <h2 id="1">Specifications</h2>
                <h2 id="2">UX/UI</h2>
                <h2 id="3">Contenus</h2>
                <h2 id="4">Architecture</h2>
                <h2 id="5">Frontend</h2>
                <h2 id="6">Backend</h2>
                <h2 id="7">Hébergement</h2>



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