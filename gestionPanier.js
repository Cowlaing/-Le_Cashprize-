var requestURL = "pratiquesFROMexcel.json";
var request = new XMLHttpRequest();

request.open("GET", requestURL);
request.responseType = "json";
request.send();
var pratiques = request.response;

request.onload = function () {
  affichePanier();
};

//Le panier en local storage, on ne le reset pas si non vide
var panier = [];
//Le panier ne contient que les ID des articles
if (localStorage.getItem("panier") != null) {
  panier = Array.from(JSON.parse(localStorage.getItem("panier")));
}

function afficheArticle(element) {
  //Recuperation de la table
  let table = document.getElementById("corps-tableau-panier");
  //Creation de la ligne
  let newTr = document.createElement("tr");
  //Creation des colonnes
  let idTd = document.createElement("td");
  let famTd = document.createElement("td");
  let descTd = document.createElement("td");

  //Ajout de classe, utile pour le css
  idTd.id = element["ID"];
  idTd.classList.add("id", element["famille"]);
  famTd.classList.add("famille", element["famille"]);
  descTd.classList.add("description", element["famille"]);

  //Remplissage des cases
  idTd.textContent = element["ID"];
  famTd.textContent = element["famille"];
  descTd.textContent = element["criteres"];

  //Ajout de Id -> Famille -> Ddescription dans la ligne
  newTr.appendChild(idTd);
  newTr.appendChild(famTd);
  newTr.appendChild(descTd);

  //Ajout de la ligne dans le tableau
  table.appendChild(newTr);
}

//pour afficher
function affichePanier() {
  var indexIncontournable = [];
  //AJOUT CRITERES INCONTOURNABLES :
  var pratiques = request.response;
  var prat = pratiques["listePratiques"];
  for (var i = 0; i < prat.length; i++) {
    if (prat[i]["incontournable"] != null) {
      indexIncontournable.push(i); //ajoute l'index des criteres incontournables
    }
  }
  //affichage CRITERES INCONTOURNABLES :
  for (var i = 0; i < indexIncontournable.length; i++) { 
    afficheArticle(prat[indexIncontournable[i]]);
  }

  //ajout critères manuellement LOCALSTORAGE
  var panierSauv = Array.from(JSON.parse(localStorage.getItem("panier")));
  for (var i = 0; i < panierSauv.length; i++) { 
    afficheArticle(prat[panierSauv[i]]);
  }
}

function vider() {
    localStorage.clear();
    location.reload();
}