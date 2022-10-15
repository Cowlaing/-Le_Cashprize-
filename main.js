function Pratique(t,d){
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

affichePratique(p);