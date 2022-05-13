var navbar = document.getElementById("top-nav");
window.onscroll = function() {
  if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    navbar.style="background:white ";
    navbar.style.color="color: #000069";
  }
  else {
    navbar.style="background-image: #c3c6a0;";
  }
}
