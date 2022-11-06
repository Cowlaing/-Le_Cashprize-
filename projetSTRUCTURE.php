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

<body id="top">
    <!--Header PHP-->
    <?php include 'header.php';  ?>
    <section class="container">
        <h2 class="titre">Projet</h2>
    </section>
    <!--partie test COLIN-->
    <!-- PARTIE GAUCHE -->
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
            <!--séparateur-->
            <article class="main">
                <h2 class="titre">Les pratiques séléctionnées</h2>
                <p class="titre">Voici la liste des bonnes pratiques que vous avez rentré dans votre panier.</p>

                <!--Liste des catégories de pratiques-->
                <h4 id="0">Acquisition</h4>
                <ul class="ul-decalage">
                    <li>
                        <article>
                            <div>
                                <span>RECOMMANDATION STRATEGIE<span>
                                        <span class="attributs">people-A</span>
                                        <span class="attributs">planet-A</span>
                                        <span class="attributs">prosperity-B</span>
                                        <span class="attributs">FACILE</span></span>
                                </span>
                                <h3>Les réunions sont-elles limitées au strict minimum, en privilégiant le
                                    distanciel, lorsque les réunions nécessitent des déplacements physiques ?
                                </h3>
                            </div>
                            <!--on met pas indicateurs-->
                            <form data-screen-only>
                                <label id="progress-IDelement">Indicateur : </label>
                                <!--INDICATEUR X uniquement-->
                                <select id="progress-IDelement" name="progress-IDelement">
                                    <option value="0">choix commencement</option>
                                    <option value="100">choix terminé</option>
                                </select>
                            </form>
                        </article>
                    </li>
                    <hr>
                    <!--PETITE DELIMITATION-->
                    <li>
                        <article>
                            <div>
                                <div>
                                    <span>RECOMMANDATION STRATEGIE<span>
                                            <span class="attributs">people-A</span>
                                            <span class="attributs">planet-A</span>
                                            <span class="attributs">prosperity-B</span>
                                            <span class="attributs">FACILE</span></span>
                                    </span>
                                    <h3>Les réunions sont-elles limitées au strict minimum, en privilégiant le
                                        distanciel, lorsque les réunions nécessitent des déplacements physiques ?
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
                <h4 id="1">Conception</h4>
                <ul class="ul-decalage">
                    <li>
                        <article>
                            <div>
                                <span>RECOMMANDATION STRATEGIE<span>
                                        <span class="attributs">people-A</span>
                                        <span class="attributs">planet-A</span>
                                        <span class="attributs">prosperity-B</span>
                                        <span class="attributs">FACILE</span></span>
                                </span>
                                <h3>Les réunions sont-elles limitées au strict minimum, en privilégiant le
                                    distanciel, lorsque les réunions nécessitent des déplacements physiques ?
                                </h3>
                            </div>
                            <!--on met pas indicateurs-->
                            <form data-screen-only>
                                <label id="progress-IDelement">Indicateur : </label>
                                <!--INDICATEUR X uniquement-->
                                <select id="progress-IDelement" name="progress-IDelement">
                                    <option value="0">choix commencement</option>
                                    <option value="100">choix terminé</option>
                                </select>
                            </form>
                        </article>
                    </li>
                    <hr>
                    <!--PETITE DELIMITATION-->
                    <li>
                        <article>
                            <div>
                                <div>
                                    <span>RECOMMANDATION STRATEGIE<span>
                                            <span class="attributs">people-A</span>
                                            <span class="attributs">planet-A</span>
                                            <span class="attributs">prosperity-B</span>
                                            <span class="attributs">FACILE</span></span>
                                    </span>
                                    <h3>Les réunions sont-elles limitées au strict minimum, en privilégiant le
                                        distanciel, lorsque les réunions nécessitent des déplacements physiques ?
                                    </h3>
                                </div>
                            </div>
                        </article>
                    </li>
                </ul>
                <h4 id="2">Réalisation</h4>
                <h4 id="3">Déploiement</h4>
                <h4 id="4">Administration</h4>
                <h4 id="5">Utilisation</h4>
                <h4 id="6">Maintenance</h4>
                <h4 id="7">Fin de Vie</h4>
                <h4 id="8">Revalorisation</h4>
                <h4 id="9">N/A</h4>

            </article>
    </section>



    <a href="#top" data-screen-only>
        <button class="top"></button>
    </a>
    <!--Footer PHP-->
    <?php include 'footer.php';  ?>
</body>

</html>