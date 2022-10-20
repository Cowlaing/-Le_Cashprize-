

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
    //Creation des éléments
    let nouvLi = document.createElement('li');
    let nouvArticle = document.createElement("article");
    let ul = document.getElementById("ulp");
    let fam = document.createElement("h3");
    let reco = document.createElement("p");
    //Ajout de la classe et de l'id
    nouvLi.classList.add('pratique',jsonObj['famille']);
    nouvLi.setAttribute("id",jsonObj['ID']);
    //Creation des textes
    fam.textContent = jsonObj['famille'];
    reco.textContent = jsonObj['recommandation'];
    //Ajout des éléments dans la document
    nouvArticle.appendChild(fam);
    nouvArticle.appendChild(reco);
    nouvLi.appendChild(nouvArticle)
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
afficheT.set("SPECIFICATIONS",false);
afficheT.set("UX/UI",false);
afficheT.set("CONTENUS",false);
afficheT.set("ARCHITECTURE",false);
afficheT.set("FRONTEND",false);
afficheT.set("BACKEND",false);
afficheT.set("HEBERGEMENT",false);


function cacherType(type){
    //Cache tous les elements avec la classe type
    var typeLi = document.getElementsByClassName(type);
    for( var i = 0; i<typeLi.length; i++){
        //On ajoute la classe css hidden
        typeLi[i].classList.add("hidden");
        
    }
}

function afficheType(type){
    //Affiche tout les elements avec la classe type
    var typeAffiche = document.getElementsByClassName(type);
    for(var i =0; i<typeAffiche.length;i++){
        //on eneleve la classe css hidden
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
        //Si tout n'est pas false, alors on affiche selon les valeurs dans le dictionnaire
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
        //Si tout est false, on affiche tout
        afficheToutType();
    }
}



