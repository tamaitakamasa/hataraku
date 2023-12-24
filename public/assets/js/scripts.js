document.addEventListener("DOMContentLoaded", (event) => {
  // ヘッダーのクラス切り替え
  (function () {
    const elemHeader = document.querySelector(".l-header");
    const triggerPoint = 200;
    window.addEventListener("scroll", () => {
      if (window.scrollY > triggerPoint) {
        elemHeader.classList.add("l-header--scrolled");
      } else {
        elemHeader.classList.remove("l-header--scrolled");
      }
    });
  })();

  // ハンバーガーメニュー（ドロワーナビ）
  (function () {
    const elemTrigger = document.querySelector(".js-trigger");
    const elemHeader = document.querySelector(".l-header");
    const elemDrawer = document.querySelector(".l-drawer");
    const elemDrawerLinks = document.querySelectorAll(".l-drawer a");
    const triggerActiveClassName = "c-trigger--active";
    const headerActiveClassName = "l-header--active";
    const navActiveClassName = "l-drawer--active";

    elemTrigger.addEventListener("click", function () {
      this.classList.toggle(triggerActiveClassName);
      elemDrawer.classList.toggle(navActiveClassName);
      elemHeader.classList.toggle(headerActiveClassName);
    });

    elemDrawerLinks.forEach((elem) => {
      elem.addEventListener("click", function () {
        elemTrigger.classList.remove(triggerActiveClassName);
        elemDrawer.classList.remove(navActiveClassName);
        elemHeader.classList.remove(headerActiveClassName);
      });
    });
  })();
});
