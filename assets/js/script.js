window.addEventListener('load', function() {
    console.log('All assets are loaded');
});

const openBtn = document.querySelector(".js-card-opener");

openBtn.onclick = function () {
  document.body.classList.toggle("open");
};