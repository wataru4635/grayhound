document.addEventListener('DOMContentLoaded', function () {
  const toggleButtons = document.querySelectorAll('.js-toggle-btn');

  toggleButtons.forEach((button) => {
    button.addEventListener('click', function () {
      const faqItem = this.closest('.faq__item');
      const answer = faqItem.querySelector('.faq__item-answer');
      const toggle = this.querySelector('.faq__item-toggle');
      const isOpen = answer.classList.contains('is-open');

      if (isOpen) {
        answer.classList.remove('is-open');
        toggle.classList.remove('is-open');
        answer.style.maxHeight = '0px';
        this.setAttribute('aria-expanded', 'false');
      } else {
        answer.classList.add('is-open');
        answer.style.maxHeight = '0px';
        const scrollHeight = answer.scrollHeight;
        answer.style.maxHeight = scrollHeight + 'px';
        toggle.classList.add('is-open');
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // スクロールヒントの初期化
  if (typeof ScrollHint === 'function') {
    new ScrollHint('.js-scrollable', {
      scrollHintIconAppendClass: 'scroll-hint-icon-white',
      i18n: {
        scrollable: 'スクロールできます',
      },
    });
  }
});

