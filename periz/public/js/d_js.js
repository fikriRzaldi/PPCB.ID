var dropdown = document.getElementsByClassName("drpnavmain");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var navchild = this.nextElementSibling;
  if (navchild.style.display === "block") {
    navchild.style.display = "none";
  } else {
    navchild.style.display = "block";
  }
  });
}