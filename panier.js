function creerCookie(nomArticle,quantite){
    //nom de l'article qu'on met dans le panier
    document.cookie = nomArticle;
}
function lireCookie(nomArticle){
    //Récupération nom de l'article sélectionné 
    var nomArticle = nom;
    //Création tableau avec tous les articles
    var listeArticles = document.cookie.split(';');  
    for(var i = 0; i<listeArticles.length; i++){
      var article = listeArticles[i];
      if(article.indexOf(nomArticle) == 0){
        return article.substring(nomArticle,quantite);

      }
    }
}
function afficherPanier(){
    var afficherArticle = document.getElementbyId('cook');
    affiche.innerHTML = 'L article est :'   + lireCookie('Cookie1'); 
}
creerCookie(Ballon, 3);
lireCookie(Ballon);
