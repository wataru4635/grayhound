/* ===============================================
# MVスライダー
=============================================== */
window.addEventListener('load', () => {
  setTimeout(() => {
    const mvElement = document.querySelector(".js-mv-swiper");
    if (!mvElement) return;

    const mvSwiper = new Swiper(".js-mv-swiper", {
      loop: true,
      speed: 2000,
      effect: "fade",
      fadeEffect: {
        crossFade: true
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      allowTouchMove: false,
    });
  }, 100);
});

/* ===============================================
# ポイントスライダー
=============================================== */
document.addEventListener("DOMContentLoaded", () => {
  let pointSwiper = null;

  const initPointSwiper = () => {
    const pointElement = document.querySelector(".js-top-point-swiper");
    if (!pointElement) return;

    const bp = window.matchMedia("(max-width: 767px)");

    if (bp.matches) {
      if (!pointSwiper) {
        pointSwiper = new Swiper(".js-top-point-swiper", {
          loop: true,
          slidesPerView: 1,
          speed: 1000,
          centeredSlides: true,
          autoplay: {
            delay: 3000,
            disableOnInteraction: false,
          },
        });
      }
    } else {
      if (pointSwiper) {
        pointSwiper.destroy(true, true);
        pointSwiper = null;
      }
    }
  };

  initPointSwiper();

  window.addEventListener("resize", initPointSwiper);
});
