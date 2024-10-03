
function page(destination) {
  window.location.href = destination;
}
document.addEventListener("DOMContentLoaded", () => {
  document.getElementById(window.location.pathname).classList.add("active");
}); 