function myFunction() {
  if (document.getElementById("lang").innerText == "English") {
    dutchText();
  } else if (document.getElementById("lang").innerText == "Dutch") {
    englishText();
  }
}
function dutchText() {
  document.getElementById("lang").innerText = "Dutch";
  document.getElementById("lang").style.color = "red";
  document.getElementById("main").innerText = "Belangerijke inhoud";
  document.getElementById("event").innerText = "Evenement";
  document.getElementById("footer1").innerText = "- 2024 Mijn website";
  document.getElementById("footer2").innerText = "Thuis > Sectie > Pagina";
}

function englishText() {
  document.getElementById("lang").innerText = "English";
  document.getElementById("lang").style.color = "blue";
  document.getElementById("main").innerText = "Important content";
  document.getElementById("event").innerText = "Event";
  document.getElementById("footer1").innerText = "- 2024 My website";
  document.getElementById("footer2").innerText = "Home > Section > Page";
}
