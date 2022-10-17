/*function Pratique(t,d){
    this.titre = t;
    this.description =d;
}

let p = new Pratique("Pratique 3","Eteindre les appareils");

function affichePratique(p){
    let nouvLi = document.createElement('li');
    let ul = document.getElementById("ulp");
    let titre = document.createElement("h3");
    let desc = document.createElement("p");
    titre.textContent = p.titre;
    desc.textContent = p.description;
    nouvLi.appendChild(titre);
    nouvLi.appendChild(desc);
    ul.append(nouvLi);
}

affichePratique(p);*/

var requestURL = "pratiques.json";
var request = new XMLHttpRequest();

request.open('GET',requestURL);
request.responseType ='json';
request.send();

request.onload = function(){
    var pratiques = request.response;
    afficheTout(pratiques);
}

function affiche(jsonObj){
    let nouvLi = document.createElement('li');
    let ul = document.getElementById("ulp");
    let fam = document.createElement("h3");
    let reco = document.createElement("p");
    nouvLi.classList.add('pratique',jsonObj['famille']);
    
    fam.textContent = jsonObj['famille'];
    
    reco.textContent = jsonObj['recommandation'];
    nouvLi.appendChild(fam);
    nouvLi.appendChild(reco);
    ul.appendChild(nouvLi)
}

function afficheTout(jsonObj){
    var prat = jsonObj['pratiques'];
    for (var i =0; i<prat.length;i++){
        affiche(prat[i]);
    }
}

function afficheType(type){
    var pratiques = request.response
    var prat = pratiques['pratiques']
    for (var i =0; i < prat.length;i++){
        var jsonObj = prat[i];
        if (jsonObj['famille'] == type){
            affiche(jsonObj);
        }
    }
}

function afficheToutType(types){
    for(var i = 0; i<types.length;i++){
        afficheType(types[i]);
    }
}



