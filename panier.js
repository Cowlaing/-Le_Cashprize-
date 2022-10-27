function creerCookie(nomArticle){
    //nom de l'article qu'on met dans le panier
    panier.cookie = nomArticle;
}
function lireCookie(nomArticle){
    //Récupération nom de l'article sélectionné 
    var nomArticle = nom;
    //Création tableau avec tous les articles
    var listeArticles = panier.cookie.split(';');   
}
function afficherPanier(){
    var afficherArticle = pannier.getElementbyId('cook');
    affiche.innerHTML = 'L article est :'   + lireCookie('Cookie1'); 
}