"use strict";

/* ===============================================
# ヘッダー、ハンバーガーメニュー処理全体
=============================================== */
document.addEventListener("DOMContentLoaded", () => {
  const BODY_CLASS = "body-hidden";
  const OPEN_CLASS = "is-open";
  const header = document.querySelector(".header");
  const menuBtn = document.querySelector(".js-menu-btn");
  const drawer = document.querySelector(".js-drawer");
  const mediaQuery = window.matchMedia("(min-width: 1000px)");
  function openDrawer() {
    document.body.classList.add(BODY_CLASS);
    drawer.classList.add(OPEN_CLASS);
    header.classList.add(OPEN_CLASS);
    menuBtn.classList.add(OPEN_CLASS);
  }
  function closeDrawer() {
    if (!document.body.classList.contains(BODY_CLASS)) return;
    document.body.classList.remove(BODY_CLASS);
    drawer.classList.remove(OPEN_CLASS);
    header.classList.remove(OPEN_CLASS);
    menuBtn.classList.remove(OPEN_CLASS);
  }
  function toggleDrawer(event) {
    event.preventDefault();
    const isOpen = drawer.classList.contains(OPEN_CLASS);
    if (isOpen) {
      closeDrawer();
    } else {
      openDrawer();
    }
  }
  menuBtn.addEventListener("click", toggleDrawer);
  drawer.addEventListener("click", event => {
    if (event.target.matches("a[href]")) {
      closeDrawer();
    }
  });
  let resizeTimeout;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      if (mediaQuery.matches) closeDrawer();
    }, 150);
  });
  mediaQuery.addEventListener("change", () => {
    if (mediaQuery.matches) closeDrawer();
  });
  function handleScroll() {
    if (window.scrollY >= 50) {
      header.classList.add("is-scroll");
    } else {
      header.classList.remove("is-scroll");
    }
  }
  handleScroll();
  window.addEventListener("scroll", handleScroll);
});
/* ===============================================
# トップへ移動
=============================================== */

var toTopButton = document.querySelector('.to-top');
window.addEventListener('scroll', function () {
  var scrollPosition = window.scrollY || document.documentElement.scrollTop;
  if (scrollPosition > 300) {
    toTopButton.classList.add("js-active");
  } else {
    toTopButton.classList.remove("js-active");
  }
});
toTopButton.addEventListener('click', function () {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

/* ===============================================
# アニメーション
// =============================================== */
document.addEventListener('DOMContentLoaded', () => {
  function observeElements(selector, activeClass = "is-active", options = {}, keepActive = false) {
    const elements = document.querySelectorAll(selector);
    function handleIntersect(entries, observer) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add(activeClass);
          if (!keepActive) {
            observer.unobserve(entry.target);
          }
        } else {
          if (!keepActive) {
            entry.target.classList.remove(activeClass);
          }
        }
      });
    }
    const observer = new IntersectionObserver(handleIntersect, options);
    elements.forEach(element => observer.observe(element));
  }
  function getRootMargin(pcMargin, spMargin) {
    return window.matchMedia("(min-width: 768px)").matches ? pcMargin : spMargin;
  }
  observeElements(".js-fade-in", "is-active", {
    rootMargin: getRootMargin("0px 0px -10% 0px", "0px 0px -10% 0px")
  });
  observeElements(".js-fade-up", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px")
  });
  observeElements(".js-scaleImg", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -5% 0px")
  });
  observeElements(".js-top-news-list", "is-active", {
    rootMargin: getRootMargin("0px 0px -20% 0px", "0px 0px -10% 0px")
  });
});