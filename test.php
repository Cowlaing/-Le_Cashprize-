<!DOCTYPE html>
<html>
<head>
<?php include "head.php"; ?>
</head>

<body>
<?php include "header.php"; ?>
<div class="colonne-gauche">
<form class="form-filtre">
<h id="titre-filtre">Filtres</h>
  <ul id="cases-colonne-gauche">
    <li>
      <h class="type-filtre" id="type-pratique-filtre">Type de pratique :</h>
      <ul class="type-filtre-choix">
        <li>
          <input type="checkbox" name="type[]" id="spec" value="spec">
          <label for="spec">Specifications</label>
        </li>
        <li>
          <input type="checkbox" name="type[]" id="strat" value = "strat">
          <label for="strat">Strategie</label>
        </li>
      </ul>
    </li>
    <li>
      <h class = "type-filtre" id="autre-type-filtre">Autre type de filtre :</h>
      <ul class="type-filtre-choix">
        <li>
          <input type="radio" name="autreFiltre" id="autreFiltre1">
          <label for="autreFiltre">Choix 1<label>
        </li>
        <li>
          <input type="radio" name="autreFiltre" id="autreFiltre2">
          <label for="autreFiltre2">Choix 2</label>
        </li>
      </ul>
    </li>
    <li>
      <button onclick="afficheType('STRATEGIE')" id="bouton-valider">Valider</button>
    </li>
  </form>
  </ul>
  </div>
<div class ="liste-des-pratiques">
    <ul class="ul-des-pratiques" id="ulp">
      <li id="pratique-une" class="pratique">
        <h3>Pratique n°1</h3>
        <p>Il faut baisser le chauffage quand on est pas la</p>
      </li>
      <li id="pratique-deux" class ="pratique">
        <h3>Pratique n°2</h3>
        <p>Couper l'eau quand on se brosse les dents</p>
      </li>
    </ul>
     
  </div>

<script src="main.js"></script>
</body>

</html>