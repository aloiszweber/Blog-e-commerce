document.addEventListener("DOMContentLoaded", function () {
  // Fonction pour filtrer les articles
  function filterArticles() {
    var input = document.getElementById("searchInput");
    console.log(input.value);
    var filter = input.value.toUpperCase();
    var articles = document.getElementsByClassName("article");

    for (var i = 0; i < articles.length; i++) {
      var title = articles[i].getElementsByTagName("h2")[0];
      if (title.innerText.toUpperCase().indexOf(filter) > -1) {
        articles[i].style.display = "";
      } else {
        articles[i].style.display = "none";
      }
    }
  }

  // Ajouter un événement pour déclencher le filtrage lors de la saisie dans la barre de recherche
  document
    .getElementById("searchInput")
    .addEventListener("input", filterArticles);

  var input = document.getElementById("searchInput");
  var filter = input.value.toUpperCase();
  console.log(input);
});
