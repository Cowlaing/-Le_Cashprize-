

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

var afficheT = new Map();
afficheT.set("STRATEGIE",false); //De base tout n'est pas afficher;
afficheT.set("SPECIFICATIONS",false)

function cacherType(type){
    //Cache tous les elements avec la classe type
    var typeLi = document.getElementsByClassName(type);
    for( var i = 0; i<typeLi.length; i++){
        typeLi[i].classList.add("hidden");
        
    }
}

function afficheType(type){
    //Affiche tout les elements avec la classe type
    var typeAffiche = document.getElementsByClassName(type);
    for(var i =0; i<typeAffiche.length;i++){
        typeAffiche[i].classList.remove("hidden")
    }
    
    
}

function afficheToutType(){
    //Affiche tout les type de pratique
    for(var[key,value] of afficheT){
        afficheType(key);
    }
}

function gestionFiltre(type){
    //Appel de la fcontion avec le type à afficher
    afficheT.set(type, !afficheT.get(type)); // Inversion de la valeur
    //gestion de filtre type
    //Verification si tout les elements sont false (situation de depart)
    var allfalse = false;
    for(var [key,value] of afficheT){
        allfalse = allfalse || value; //vaut true si il y uniquement un true
    }
    allfalse = !allfalse; // donc tout n'est pas false

    if(!allfalse){
        for(var[key,value] of afficheT){
            if(value){
                afficheType(key);
            }
            else{
                cacherType(key);
            }    
        }
            

    }
    else{

        afficheToutType();
    }
}



