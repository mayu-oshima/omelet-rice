document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    const spotlightSections = document.querySelectorAll(".spotlight");
    const scroll = window.scrollY;
    const windowHeight = window.innerHeight;

    spotlightSections.forEach(function (section) {
      const sectionTop = section.getBoundingClientRect().top + scroll;

      if (scroll > sectionTop - windowHeight + 200) {
        // .curtain.move をアクティブに
        const curtain = section.querySelector(".curtain.move");
        if (curtain) {
          curtain.classList.add("active");
        }
        const img = section.querySelector("img.move");
        if (img) {
          img.classList.add("active");
        }

        // .content_spotlight をアクティブに（ふわっと表示）
        const content = section.querySelector(".content_spotlight");
        if (content) {
          content.classList.add("active");
        }
      }
    });
  });
});