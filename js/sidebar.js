const sidebar = document.getElementById("sidebar");
const sidetoggle = document.getElementById("toggle");
const sectionall = document.getElementById("section-all");
toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
  sectionall.classList.toggle("close");
});
