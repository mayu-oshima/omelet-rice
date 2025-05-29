// Curtainのscript
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    const elements = document.querySelectorAll(".move");
    const scroll = window.scrollY;
    const windowHeight = window.innerHeight;

    elements.forEach(function (el) {
      const blockPosition = el.getBoundingClientRect().top + scroll;
      if (scroll > blockPosition - windowHeight + 200) {
        el.classList.add("active");
      }
    });
  });
});