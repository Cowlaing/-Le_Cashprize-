//test impression
function imprimer_page(){
    window.print();
}

var requestURL = "pratiquesFROMexcel.json";
var request = new XMLHttpRequest();

request.open('GET',requestURL);
request.responseType ='json';
request.send();


request.onload = function(){ //CHARGE LES PRATIQUES ICI
    var pratiques = request.response;
    console.log(pratiques.listePratiques.length); //affiche dans la console la longueur
    afficheTout(pratiques);
}

function affiche(jsonObj){
    //Creation des éléments
    let nouvLi = document.createElement('li');
    // nouvLi.className="testLI"; AJOUTER classe à un élément
    let nouvArticle = document.createElement("article");
    let ul = document.getElementById("ulp");
    let fam = document.createElement("h3");
    let reco = document.createElement("p");
    let input = document.createElement("input");
    //Ajout de la classe (pour FILTRE) et de l'id
    nouvLi.classList.add('pratique',jsonObj['famille']);
    nouvLi.classList.add('type',jsonObj['type']);

    nouvLi.setAttribute("id",jsonObj['ID']);
    //Creation des textes des éléments
    fam.textContent = jsonObj['famille'];
    reco.textContent = jsonObj['criteres'];
    //Class bouton-ajouter et texte ajouter pour le bouton
    
    //Ajout des éléments dans la document
    nouvArticle.appendChild(fam);
    nouvArticle.appendChild(reco);
    //Configuration du bouton ajouter
    input.type ="button";
    input.value="Ajouter";
    input.classList.add("bouton-ajouter");
    input.addEventListener('click',function(){
        ajouterPanier(jsonObj['ID']);
    })
    //Ajout du bouton
    nouvArticle.appendChild(input);
    //Ajout du reste des éléments
    nouvLi.appendChild(nouvArticle);
    ul.appendChild(nouvLi);
}

function afficheTout(jsonObj){
    var prat = jsonObj['listePratiques'];
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

afficheT.set("RECO",false);


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
    //Appel de la fonction avec le type à afficher
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

//Partie RECHERCHE
/*
const searchInput = document.querySelector("#search") //ici ID search
const searchResult = document.querySelector(".main")

let dataArray;
async function getPratiques(){
    const res = pratiques //base de données = pratiques

}
*/


//Partie gestion de panier


//Le panier
var panier = [];
//La focntion
function ajouterPanier(id){
    //Récupère la liste des pratiques
    var pratiques = request.response;
    var prat = pratiques['pratiques'];
    //On cherhce la pratique avec le bon id
    let index = 0;
    for (var i =0;i< prat.length;i++){
        if(prat[i]['ID'] == id){
            index = i;
            stop;
        }
    }
    //On recupere la pratique (objet Json)
    let element = prat[index];
    let pratique = document.getElementById(id);
    //Verfions si l'element n'est pas deja dans le panier
    if(!pratique.classList.contains("dans-panier")){
        //Ajoute l'elemenet dans le panier
        panier.push(element);
        //Ajoute la classe "dans-panier"
        pratique.classList.add("dans-panier");
    }
    else{
        window.alert("Deja dans le panier");
    }
    
}


