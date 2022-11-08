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

function afficheArticle(jsonObj) {
  let ul;
  /*
  If|Else → ordre décroissant du nombre de critère par type CYCLE DE VIE : 
  N/A			        23
  Acquisition	    53
  Conception	    82
  Réalisation	    93
  Déploiement	    48
  Administration	45
  Utilisation	    88
  Maintenance		  16
  Fin de Vie		  17
  Revalorisation	26

ICI "fin de vie" marche pas → on le met en ELSE
*/
  if (jsonObj["cycleVie"] === "Réalisation") {
    ul = document.getElementById("rea");
  } else if (jsonObj["cycleVie"] === "Utilisation") {
    ul = document.getElementById("util");
  } else if (jsonObj["cycleVie"] === "Conception") {
    ul = document.getElementById("concep");
  } else if (jsonObj["cycleVie"] === "Acquisition") {
    ul = document.getElementById("acqui");
  } else if (jsonObj["cycleVie"] === "Déploiement") {
    ul = document.getElementById("deploi");
  } else if (jsonObj["cycleVie"] === "Administration") {
    ul = document.getElementById("admi");
  } else if (jsonObj["cycleVie"] === "Revalorisation") {
    ul = document.getElementById("revalo");
  } else if (jsonObj["cycleVie"] === "N/A") {
    ul = document.getElementById("N/A");
  } else if (jsonObj["cycleVie"] === "Maintenance") {
    ul = document.getElementById("maintenance");
  } else {
    //FIN DE VIE
    ul = document.getElementById("end");
  }

  ul.classList.add("ul-decalage");
  let li = document.createElement("li");
  let article = document.createElement("article");
  let divArticle = document.createElement("div");
  /*form.setAttribute("data-screen-only",""); INDICATEURS*/
  let spanLigne = document.createElement("span");
  let spanAttributs = document.createElement("span");
  let spanIncontournable = document.createElement("span");
  let spanPeople = document.createElement("span");
  let spanPlanet = document.createElement("span");
  let spanProsperity = document.createElement("span");
  let spanDifficulty = document.createElement("span");

  let critere = document.createElement("h3");
  let hrLIGNE = document.createElement("hr");
  //donne l'id au bloc
  li.setAttribute("id", jsonObj["ID"]);
  li.classList.add("LiListeItem");

  spanIncontournable.classList.add("attributs","incontournable");
  spanPeople.classList.add("attributs");
  spanPlanet.classList.add("attributs");
  spanProsperity.classList.add("attributs");
  spanDifficulty.classList.add("attributs");
  //Creation des textes des éléments
  spanLigne.textContent = jsonObj["type"] + " " + jsonObj["famille"];
  spanPeople.textContent = jsonObj["people"];
  spanPlanet.textContent = jsonObj["planet"];
  spanProsperity.textContent = jsonObj["prosperity"];
  spanDifficulty.textContent = jsonObj["miseEnOeuvre"];
  critere.textContent = jsonObj["criteres"];

  
  //Structuration
  ul.appendChild(li);
  li.appendChild(article);
  article.appendChild(divArticle);
  divArticle.appendChild(spanLigne);
  spanLigne.appendChild(spanAttributs);
  //SI critere INCONTOURNABLE :
  if(jsonObj['incontournable']!=null){
    spanIncontournable.textContent = jsonObj["incontournable"];
    spanAttributs.appendChild(spanIncontournable);
  }
  spanAttributs.appendChild(spanPeople);
  spanAttributs.appendChild(spanPlanet);
  spanAttributs.appendChild(spanProsperity);
  spanAttributs.appendChild(spanDifficulty);
  divArticle.appendChild(critere);
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
  if (localStorage.getItem("panier")!= null){
    var panierSauv = Array.from(JSON.parse(localStorage.getItem("panier")));
    for (var i = 0; i < panierSauv.length; i++) {
      afficheArticle(prat[panierSauv[i]]);
    }
  }
  
}

function vider() {
  localStorage.clear();
  location.reload();
}
