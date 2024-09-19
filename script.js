function langSwitch() {
  if (lang.innerText == "English") {
    dutchText();
  } else if (lang.innerText == "Nederlands") {
    englishText();
  }
}
function dutchText() {
  lang.style.color = "red";
  lang.innerText = "Nederlands";
  main.innerText = "Belangerijke inhoud";
  side2.innerText = "Evenement";
  footer1.innerText = "- 2024 Mijn website";
  footer2.innerText = "Thuis > Sectie > Pagina";
}

function englishText() {
  lang.style.color = "blue";
  lang.innerText = "English";
  main.innerText = "Important content";
  side2.innerText = "Event";
  footer1.innerText = "- 2024 My website";
  footer2.innerText = "Home > Section > Page";
}
const hi1 = {
  name: "hi1",
  age: 20,
  location: "almere",
};
hi1.children = 2;

for (let i in hi1) {
  console.log(i + ": " + hi1[i]);
}

function function1() {
    document.querySelector("main").style.borderImage = "chroma.GIF"
  }

function function2(){
  stop
  document.querySelector("main").style.border = "none"


}
// function stopLight() {
//   let r = Math.round(Math.random() * 255);
//   let g = Math.round(Math.random() * 255);
//   let b = Math.round(Math.random() * 255);
//   document.querySelector("aside").style.border =
//     "10px solid rgb(" + r + "," + g + "," + b + ")";
//   document.getElementById("aside2").style.border =
//     "10px solid rgb(" + r + "," + g + "," + b + ")";
//   document.querySelector("header").style.border =
//     "10px solid rgb(" + r + "," + g + "," + b + ")";
//   document.querySelector("footer").style.border =
//     "10px solid rgb(" + r + "," + g + "," + b + ")";
//   document.querySelector("main").style.border =
//     "10px solid rgb(" + r + "," + g + "," + b + ")";
//   setTimeout(() => {
//     stopLight();
//   }, 500);
// }
