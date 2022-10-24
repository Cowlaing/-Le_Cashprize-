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
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!--Header PHP-->
  <?php require 'header.php';  ?>

  <!-- PARTIE GAUCHE -->
  <section class="main">
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
    </form>
    <ul class="main" id="ulp">
      <!--ECRIRE ICI bonnes pratiques-->
      <h2>Sélectionnez vos bonnes pratiques</h2>

    </ul>
    
  </section>
  <script src="main.js"></script>
</body>

</html