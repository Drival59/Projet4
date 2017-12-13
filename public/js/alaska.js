var btnMoreChaptersElt = document.getElementById('more_chapters');
var chaptersHiddenElts = document.getElementsByClassName('chaptersHidden');
var divBtnMoreChaptersElt = document.getElementById('btnMoreChapters');
var nbChaptersToLoad = 3;

btnMoreChaptersElt.addEventListener("click", function () {
  for (var i = 0; i < nbChaptersToLoad; i++) {
    chaptersHiddenElts[0].classList.remove("chaptersHidden");
  }

  if (chaptersHiddenElts.length === 0) {
    divBtnMoreChaptersElt.innerHTML = "";
  }
})
