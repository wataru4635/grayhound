<button class="to-top" aria-label="トップに戻るボタン">
  <img src="<?php echo IMAGEPATH; ?>/common/to-top.webp" class="to-top__img" alt="トップに戻るボタン" width="43" height="62">
</button>

<div class="link-area">
    <div class="link-area__item link-area__item--faq">
      <a href="<?php echo FAQ_URL; ?>" class="link-area__item-link">
        <span class="link-area__item-text">よくある質問</span>
        <span class="link-area__item-icon">
          <img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="" width="14" height="14" loading="lazy" class="link-area__item-icon-img" aria-hidden="true">
        </span>
      </a>
    </div>
    <div class="link-area__item link-area__item--entry">
      <a href="<?php echo ENTRY_URL; ?>" class="link-area__item-link">
        <span class="link-area__item-text">説明会予約済みの方へ</span>
        <span class="link-area__item-icon">
          <img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="" width="14" height="14" loading="lazy" class="link-area__item-icon-img" aria-hidden="true">
        </span>
      </a>
    </div>
  </div>
  
<footer class="footer">
  <div class="footer__inner">
    <div class="footer__content">
      <div class="footer__brand">
        <div class="footer__logo-img-wrap">
          <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="地球と子どもたちのロゴイラスト" width="80" height="85" loading="lazy" class="footer__logo-img">
        </div>
        <div class="footer__title-wrap">
          <div class="footer__title-img-wrap">
            <img src="<?php echo IMAGEPATH; ?>/common/school-name-black.webp" alt="Grayhound English School の英字タイトル画像"
              width="220" height="50" loading="lazy" class="footer__title-img">
          </div>
          <a href="<?php echo PRIVACY_POLICY_URL; ?>" class="footer__privacy">プライバシーポリシー</a>
        </div>
      </div>
      <div class="footer__info">
        <div class="footer__info-item">
          <p class="footer__info-text">
            【堺東校】 〒590-0031 大阪府堺市堺区五月町 4-24<br>TEL: <a href="tel:072-222-4677">072-222-4677</a>
          </p>
        </div>
        <div class="footer__info-item">
          <p class="footer__info-text">
            【泉北校】 〒590-0153 大阪府堺市南区大庭寺 569-6<br>TEL: <a href="tel:072-299-9480">072-299-9480</a>
          </p>
        </div>
      </div>
      <a href="<?php echo PRIVACY_POLICY_URL; ?>" class="footer__sp-privacy">プライバシーポリシー</a>
    </div>
    <small class="footer__copy">Copyright &copy; Grayhound English School</small>
  </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>