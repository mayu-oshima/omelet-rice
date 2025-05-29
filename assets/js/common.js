// ヘッダーナビのscript
document.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".menu_btn").addEventListener("click", function () {
    document.body.classList.toggle("open_nav");
  });
});