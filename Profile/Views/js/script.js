function active() {
  document.getElementById("home").classList.add("active");
}

function page(destination, elementId) {
  //this function is called when a link is clicked and also stoes the active link in local storage
  sessionStorage.setItem("active", elementId);
  window.location.href = destination;
}
document.addEventListener("DOMContentLoaded", () => {
  //got it gform mozilla dev docs
  const active = sessionStorage.getItem("active"); //i am drukn
  const activeElement = document.getElementById(active); //voakjnsaaayipppieee
  activeElement.classList.add("active");
});
let elementid = sessionStorage.getItem("active");
if (elementid != "home") {
  document.getElementById("home").classList.remove("active");
  console.log("iets gaat fout");
} else {
  console.log("iets gaat goed");
}
