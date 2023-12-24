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

  gsap.registerPlugin(ScrollTrigger);

  // ピン留めを適用するかどうかを判断する閾値（例：768ピクセル）
  const pinThreshold = 768;

  // 各セクションに対してアニメーションを適用します
  const sections = document.querySelectorAll(".p-home-feature__item");
  sections.forEach((section, index) => {
    const leftColumn = section.querySelector(".c-feature__body");
    const rightImages = section.querySelectorAll(".c-feature__images img");
    // const leftColumnTitle = section.querySelector(".c-feature__title");
    // const leftColumnText = section.querySelector(".c-feature__text");
    // leftColumn.style.opacity = 0;

    // 最後のセクションを判定
    const isLastSection = index === sections.length - 1;

    // 画面幅が閾値以上の場合のみピン留めを適用
    if (window.innerWidth >= pinThreshold) {
      ScrollTrigger.create({
        trigger: section,
        start: "top top", //アニメーションが始まる位置を指定（トリガー要素の位置 画面の位置）
        end: isLastSection ? "bottom center" : "bottom top", // 最後のセクションではセンターに来たらピン留め解除
        pin: leftColumn,
        pinSpacing: false
        // markers: true
      });

      ScrollTrigger.create({
        trigger: section,
        start: "top top", //アニメーションが始まる位置を指定（トリガー要素の位置 画面の位置）
        end: "bottom 300px", // アニメーションが終わる位置を指定（トリガー要素の位置 画面の位置）
        onEnter: () => {
          // console.log("enter!");
        },
        onLeave: () => {
          gsap.to(leftColumn, {
            duration: 0.8,
            autoAlpha: 0
          });
          // console.log("leave!");
        },
        onEnterBack: () => {
          gsap.to(leftColumn, {
            duration: 1,
            autoAlpha: 1
          });
          // console.log("enterback!!");
        }
        // markers: true
      });

      gsap.from(leftColumn, {
        duration: 1.4,
        autoAlpha: 0,
        scrollTrigger: {
          trigger: section,
          start: "top center-=100" //アニメーションが始まる位置を指定（トリガー要素の位置 画面の位置）
          // end: "bottom top",
          // markers: true
        }
      });

      rightImages.forEach((image, imageIndex) => {
        const speed = imageIndex === 0 ? 200 : 80;
        gsap.fromTo(
          image,
          {y: 0},
          {
            y: speed,
            scrollTrigger: {
              trigger: section,
              start: "top center", //アニメーションが始まる位置を指定（トリガー要素の位置 画面の位置）
              end: "bottom center", //アニメーションが終わる位置を指定（トリガー要素の位置 画面の位置）
              scrub: true //スクロールに合わせてアニメーションを進める
              // markers: true
            }
          }
        );
      });
    } else {
    }
  });
});

// GSAPアニメーション
const jsFadeUps = document.querySelectorAll(".js-fadeup");
const jsFadeUpImages = document.querySelectorAll(".js-fadeup-image");

jsFadeUps.forEach((jsFadeUp) => {
  gsap.fromTo(
    jsFadeUp,
    {
      autoAlpha: 0,
      y: 10
    },
    {
      autoAlpha: 1,
      y: 0,
      delay: 0.3,
      duration: 1.5,
      scrollTrigger: {
        trigger: jsFadeUp,
        start: "top bottom"
        // markers: true,
      }
    }
  );
});

jsFadeUpImages.forEach((jsFadeUpImg, index) => {
  gsap.fromTo(
    jsFadeUpImg,
    {
      autoAlpha: 0 //ここで初期状態を設定
    },
    {
      autoAlpha: 1, //ここでアニメーションさせたい内容を書く
      delay: 0.2,
      duration: 1.5,
      scrollTrigger: {
        trigger: jsFadeUpImg,
        start: "top-=200 bottom",
        end: "bottom top",
        id: index + 1,
        once: true,
        toggleClass: {
          targets: jsFadeUpImg,
          className: "js-after"
        }
        // markers: true,
      }
    }
  );
});
