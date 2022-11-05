<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sélectionnez vos critères écoresponsable et créer votre projet !">
  <meta name="keywords" content="eco-conception, bonnes pratiques">
  <meta name="author" content="Le Cashprize D4G2021">
  <title>D4G2021 - Le Cashprize team</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/planete2.png">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
</head>

<body id="top">
  <!--Header PHP-->
  <?php include 'header.php';  ?>

  <!-- PARTIE GAUCHE -->
  <section class="container">
    <div class="columns">
      <div class="aside">
        <div class="component">
          <form class="content" data-screen-only>
            <h2 class="titre">Recherche</h2>
            <!-- partie recherche
            <fieldset>
              <legend>Recherchez par nom</legend>
              <input type="text" id="search">
            </fieldset>-->
            <fieldset>
              <legend>Incontournables</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="incontourables" value="incontourables" onclick="gestionFiltre('INCONTOURNABLE')">
                  <label for="incontourables">Critères incontournables</label>
                </li>
            </fieldset>
            <fieldset>
              <legend>Famille</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="strat" value="strat" onclick="gestionFiltre('STRATEGIE')">
                  <label for="strat">Strategie</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="spec" value="spec" onclick="gestionFiltre('SPECIFICATIONS')">
                  <label for="spec">Specifications</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="ux" value="ux" onclick="gestionFiltre('UX/UI')">
                  <label for="ux">UX/UI</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="cont" value="cont" onclick="gestionFiltre('CONTENUS')">
                  <label for="cont">Contenus</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="archi" value="archi" onclick="gestionFiltre('ARCHITECTURE')">
                  <label for="archi">Architecture</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="front" value="front" onclick="gestionFiltre('FRONTEND')">
                  <label for="front">Frontend</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="back" value="back" onclick="gestionFiltre('BACKEND')">
                  <label for="back">Backend</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="heb" value="heb" onclick="gestionFiltre('HEBERGEMENT')">
                  <label for="heb">Hébergement</label>
                </li>
              </ul>
            </fieldset>
            <fieldset>
              <legend>Type</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="reco" value="reco" onclick="gestionFiltre('RECOMMANDATION')">
                  <label for="reco">Recommandation</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="cons" value="cons" onclick="gestionFiltre('CONSEIL')">
                  <label for="cons">Conseil</label>
                </li>
            </fieldset>
            <fieldset>
              <legend>Impact personnes</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="peopleA" value="peopleA" onclick="gestionFiltre('people-A')">
                  <label for="peopleA">A</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="peopleB" value="peopleB" onclick="gestionFiltre('people-B')">
                  <label for="peopleB">B</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="peopleC" value="peopleC" onclick="gestionFiltre('people-C')">
                  <label for="peopleC">C</label>
                </li>
              </ul>
            </fieldset>
            <fieldset>
              <legend>Impact planète</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="planetA" value="planetA" onclick="gestionFiltre('planet-A')">
                  <label for="planetA">A</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="planetB" value="planetB" onclick="gestionFiltre('planet-B')">
                  <label for="planetB">B</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="planetC" value="planetC" onclick="gestionFiltre('planet-C')">
                  <label for="planetC">C</label>
                </li>
              </ul>
            </fieldset>
            <fieldset>
              <legend>Impact prospérité</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="prosperityA" value="prosperityA" onclick="gestionFiltre('prosperity-A')">
                  <label for="prosperityA">A</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="prosperityB" value="prosperityB" onclick="gestionFiltre('prosperity-B')">
                  <label for="prosperityB">B</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="prosperityC" value="prosperityC" onclick="gestionFiltre('prosperity-C')">
                  <label for="prosperityC">C</label>
                </li>
              </ul>
            </fieldset>
            <fieldset>
              <legend>Difficulté de mise en oeuvre</legend>
              <ul id="liste_filtres">
                <li>
                  <input type="checkbox" name="type[]" id="difficulty-N/A" value="difficulty-N/A" onclick="gestionFiltre('difficulty-N/A')">
                  <label for="difficulty-N/A">N/A</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="difficulty-facile" value="difficulty-facile" onclick="gestionFiltre('FACILE')">
                  <label for="difficulty-facile">Facile</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="difficulty-mid" value="difficulty-mid" onclick="gestionFiltre('MODEREE')">
                  <label for="difficulty-mid">Modérée</label>
                </li>
                <li>
                  <input type="checkbox" name="type[]" id="difficulty-hard" value="difficulty-hard" onclick="gestionFiltre('DIFFICILE')">
                  <label for="difficulty-hard">Difficile</label>
                </li>
              </ul>
            </fieldset>






            <div>
              <p>charte graphique</p>
              <div class="graphique1">.</div>
              <div class="graphique2">.</div>
              <div class="graphique3">.</div>
              <div class="graphique4">.</div>
              <div class="graphique5">.</div>
            </div>
          </form>

        </div>
      </div>
      <article class="main">
        <h2 class="titre">491 critères</h2>
        <p class="titre">Sélectionnez les bonnes pratiques que vous souhaitez ajouter à votre projet parmis les 491 critères du référentiel INR.</p>

        <ul id="ulp">
          <!--ECRIRE ICI bonnes pratiques-->

        </ul>

      </article>

      
    </div>
  </section>

  <a href="#top" data-screen-only>
    <button class="top"></button>
  </a>
  <!--Footer PHP-->
  <?php include 'footer.php';  ?>
  <script src="main.js"></script>
</body>

</html