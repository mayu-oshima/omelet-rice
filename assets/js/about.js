// boutページ：スムーススクロールのscript
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".move_smooth");

  links.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const href = this.getAttribute("href");
      const target = document.querySelector(href);
      if (!target) return;

      const position = target.offsetTop;
      window.scrollTo({
        top: position,
        behavior: "smooth"
      });
    });
  });
});