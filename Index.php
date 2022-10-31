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

<body>
  <!--Header PHP-->
  <?php include 'header.php';  ?>

  <!-- PARTIE GAUCHE -->
  <section class="container">
    <div class="columns">
      <form class="aside">
        <h2>Sélection filtre</h2>
        <ul id="liste_filtres">
          <li>
            <input type="checkbox" name="type[]" id="spec" value="spec" onclick="gestionFiltre('SPECIFICATIONS')">
            <label for="spec">Specifications</label>
          </li>
          <li>
            <input type="checkbox" name="type[]" id="strat" value="strat" onclick="gestionFiltre('STRATEGIE')">
            <label for="strat">Strategie</label>
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
        <div>
          <p>charte graphique</p>
          <div class="graphique1">.</div>
          <div class="graphique2">.</div>
          <div class="graphique3">.</div>
          <div class="graphique4">.</div>
          <div class="graphique5">.</div>
        </div>
      </form>

      <article>
        <ul class="main" id="ulp">
          <!--ECRIRE ICI bonnes pratiques-->
          <h2>Sélectionnez vos bonnes pratiques</h2>
        </ul>
        <p>text ...</p>

      </article>

      <script src="main.js"></script>
    </div>
  </section>


  <!--Footer PHP-->
  <?php include 'footer.php';  ?>
</body>

</html