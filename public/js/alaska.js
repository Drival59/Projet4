var btnMoreChaptersElt = document.getElementById('more_chapters');
var chaptersHiddenElts = document.getElementsByClassName('chaptersHidden');
var divBtnMoreChaptersElt = document.getElementById('btnMoreChapters');

var nbChaptersToLoad = 3; // Nombre de chapitres qui s'affichent lors du clic
btnMoreChaptersElt.addEventListener("click", function () {
  for (var i = 0; i < nbChaptersToLoad; i++) {
    if (chaptersHiddenElts[0] !== undefined) {
      chaptersHiddenElts[0].classList.remove("chaptersHidden");
    }
  }

  if (chaptersHiddenElts.length === 0) {
    divBtnMoreChaptersElt.innerHTML = "";
  }
})
