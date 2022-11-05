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
    let ul = document.getElementById("ulp"); //disposer tous les éléments dans l'élément avec id "ulp"
    let nouvLi = document.createElement('li'); 
    let nouvArticle = document.createElement("article");
    let divMain = document.createElement("div"); //space-beetween
    let divText = document.createElement("div"); //gauche
    

    let spanLigne = document.createElement("span");
    let spanAttributs = document.createElement("span");
    let spanPeople = document.createElement("span");
    let spanPlanet = document.createElement("span");
    let spanProsperity = document.createElement("span");
    let spanDifficulty = document.createElement("span");


    let crit = document.createElement("h3");
    let para = document.createElement("p");
    let input = document.createElement("input"); //droite
    //Ajout de la classe (pour FILTRE) et de l'id
    nouvLi.classList.add('LiListeItem',jsonObj['famille'],jsonObj['type'],jsonObj['miseEnOeuvre'],jsonObj['planet'],jsonObj['people'],jsonObj['prosperity']); //AJOUTER classe à un élément
    /*nouvLi.classList.add(jsonObj['type']);
    nouvLi.classList.add(jsonObj['miseEnOeuvre']);
    nouvLi.classList.add(jsonObj['planet']);
    nouvLi.classList.add(jsonObj['people']);
    nouvLi.classList.add(jsonObj['prosperity']);*/
    nouvLi.setAttribute("id",jsonObj['ID']);

    divMain.classList.add('mainListeItem');
    spanPeople.classList.add('attributs');
    spanPlanet.classList.add('attributs');
    spanProsperity.classList.add('attributs');
    spanDifficulty.classList.add('attributs');
    //Creation des textes des éléments
    spanLigne.textContent = jsonObj['type'] +" "+ jsonObj['famille'];
    spanPeople.textContent = jsonObj['people'];
    spanPlanet.textContent = jsonObj['planet'];
    spanProsperity.textContent = jsonObj['prosperity'];
    spanDifficulty.textContent = jsonObj['miseEnOeuvre'];

    //fam.textContent = jsonObj['famille'];
    crit.textContent = jsonObj['criteres'];
    //Class bouton-ajouter et texte ajouter pour le bouton
    
    //Ajout des éléments dans le document
    nouvArticle.appendChild(divMain);

    divMain.appendChild(divText);
    divMain.appendChild(input);

    divText.appendChild(spanLigne);
    spanLigne.appendChild(spanAttributs);
    spanAttributs.appendChild(spanPeople);
    spanAttributs.appendChild(spanPlanet);
    spanAttributs.appendChild(spanProsperity);
    spanAttributs.appendChild(spanDifficulty);
    divText.appendChild(crit);
    //Configuration du bouton ajouter
    input.type ="button";
    input.value="Ajouter";
    input.classList.add("bouton-ajouter");
    input.addEventListener('click',function(){
        ajouterPanier(jsonObj['ID']);
    })
    
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
//famille
afficheT.set("STRATEGIE",false); //De base tout n'est pas afficher;
afficheT.set("SPECIFICATIONS",false);
afficheT.set("UX/UI",false);
afficheT.set("CONTENUS",false);
afficheT.set("ARCHITECTURE",false);
afficheT.set("FRONTEND",false);
afficheT.set("BACKEND",false);
afficheT.set("HEBERGEMENT",false);
/*//type            NE SAIS PAS PQ mais il ne faut pas les mettre
afficheT.set("RECOMMANDATION",false);
afficheT.set("CONSEIL",false);
//difficulté de mise en oeuvre
afficheT.set("difficulty-N/A",false);
afficheT.set("FACILE",false);
afficheT.set("MODEREE",false);
afficheT.set("DIFFICILE",false);
//impact planète
afficheT.set("planet-A",false);
afficheT.set("planet-B",false);
afficheT.set("planet-C",false);
//impact personnes
afficheT.set("people-A",false);
afficheT.set("people-B",false);
afficheT.set("people-C",false);
//impact prospérité
afficheT.set("prosperity-A",false);
afficheT.set("prosperity-B",false);
afficheT.set("prosperity-C",false);*/


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
function affiche_panier(jsonObj){
    //Creation des éléments
    let ul = document.getElementById("ulp"); //disposer tous les éléments dans l'élément avec id "ulp"
    let nouvLi = document.createElement('li'); 
    let nouvArticle = document.createElement("article");
    let divMain = document.createElement("div"); //space-beetween
    let divText = document.createElement("div"); //gauche
    

    let spanLigne = document.createElement("span");
    let spanAttributs = document.createElement("span");
    let spanPeople = document.createElement("span");
    let spanPlanet = document.createElement("span");
    let spanProsperity = document.createElement("span");
    let spanDifficulty = document.createElement("span");


    let crit = document.createElement("h3");
    let para = document.createElement("p");
    let input = document.createElement("input"); //droite
    //Ajout de la classe (pour FILTRE) et de l'id
    nouvLi.classList.add('LiListeItem',jsonObj['famille'],jsonObj['type'],jsonObj['miseEnOeuvre'],jsonObj['planet'],jsonObj['people'],jsonObj['prosperity']); //AJOUTER classe à un élément
    /*nouvLi.classList.add(jsonObj['type']);
    nouvLi.classList.add(jsonObj['miseEnOeuvre']);
    nouvLi.classList.add(jsonObj['planet']);
    nouvLi.classList.add(jsonObj['people']);
    nouvLi.classList.add(jsonObj['prosperity']);*/
    nouvLi.setAttribute("id",jsonObj['ID']);

    divMain.classList.add('mainListeItem');
    spanPeople.classList.add('attributs');
    spanPlanet.classList.add('attributs');
    spanProsperity.classList.add('attributs');
    spanDifficulty.classList.add('attributs');
    //Creation des textes des éléments
    spanLigne.textContent = jsonObj['type'] +" "+ jsonObj['famille'];
    spanPeople.textContent = jsonObj['people'];
    spanPlanet.textContent = jsonObj['planet'];
    spanProsperity.textContent = jsonObj['prosperity'];
    spanDifficulty.textContent = jsonObj['miseEnOeuvre'];

    //fam.textContent = jsonObj['famille'];
    crit.textContent = jsonObj['criteres'];
    //Class bouton-ajouter et texte ajouter pour le bouton
    
    //Ajout des éléments dans le document
    nouvArticle.appendChild(divMain);

    divMain.appendChild(divText);
    divMain.appendChild(input);

    divText.appendChild(spanLigne);
    spanLigne.appendChild(spanAttributs);
    spanAttributs.appendChild(spanPeople);
    spanAttributs.appendChild(spanPlanet);
    spanAttributs.appendChild(spanProsperity);
    spanAttributs.appendChild(spanDifficulty);
    divText.appendChild(crit);
    //Configuration du bouton ajouter
    input.type ="button";
    input.value="Ajouter";
    input.classList.add("bouton-ajouter");
    input.addEventListener('click',function(){
        ajouterPanier(jsonObj['ID']);
    })
    
    //Ajout du reste des éléments
    nouvLi.appendChild(nouvArticle);
    ul.appendChild(nouvLi);
}


