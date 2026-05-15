document.addEventListener("DOMContentLoaded", () => {

  const panels = document.querySelectorAll(".panel");

  panels.forEach(panel => {

    panel.addEventListener("click", () => {

      // si déjà ouverte → ne rien faire
      if(panel.classList.contains("active")) return;

      // fermer toutes les cards
      panels.forEach(p => p.classList.remove("active"));

      // ouvrir la card cliquée
      panel.classList.add("active");

    });

  });

});

const panels = document.querySelectorAll(".panel");
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImage");
const closeModal = document.querySelector(".close-modal");

panels.forEach(panel => {

  panel.addEventListener("click", (e) => {

    // empêcher l'ouverture si on clique sur le PDF
    if(e.target.closest(".full-link")) return;

    const bg = panel.querySelector(".panel-bg");
    const image = bg.style.backgroundImage;

    const url = image.slice(5, -2);

    modalImg.src = url;
    modal.classList.add("active");
  });

});

closeModal.addEventListener("click", () => {
  modal.classList.remove("active");
});

modal.addEventListener("click", (e) => {
  if(e.target === modal){
    modal.classList.remove("active");
  }
});