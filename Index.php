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
  <section>
    <article class="aside">
      <h2>Sélection filtre</h2>
      <ul id="liste_filtres">
        <li>
          <input type="checkbox" name="type[]" id="spec" value="spec">
          <label for="spec">Specifications</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="strat" value="strat">
          <label for="strat">Strategie</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="ux" value="ux">
          <label for="ux">UX/UI</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="cont" value="cont">
          <label for="cont">Contenus</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="archi" value="archi">
          <label for="archi">Architecture</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="archi" value="archi">
          <label for="archi">Architecture</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="front" value="front">
          <label for="front">Frontend</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="back" value="back">
          <label for="back">Backend</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="heb" value="heb">
          <label for="heb">Hébergement</label>
        </li>
      </ul>
    </article>
    <article class="main">
      <!--ECRIRE ICI bonnes pratiques-->
      <h2>Sélectionnez vos bonnes pratiques</h2>
    </article>
  </section>


</body>

</html>