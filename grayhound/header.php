<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php if(is_page('entry')): ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <?php else: ?>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!---------  header  --------->

  <header class="header<?php if (!is_front_page()) echo ' header--sub'; ?>">
    <div class="header__inner">

      <a href="<?php echo HOME_URL; ?>" class="header__logo-link">
        <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="学校のロゴイラストが表示された画像" width="120" height="120"
          loading="lazy" class="header__logo-img">
        <h1 class="header__catchcopy">
          <span class="header__catchcopy-sub">1975年創立 大阪/堺市の子供英会話</span>
          <span class="header__catchcopy-main">グレイハウンドイングリッシュスクール</span>
        </h1>
      </a>

      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="<?php echo ABOUT_URL; ?>" class="header__nav-link">当校について</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo SCHOOL_URL; ?>" class="header__nav-link">スクール紹介</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo FAQ_URL; ?>" class="header__nav-link">よくある質問</a>
          </li>

          <li class="header__nav-item header__nav-item--cta">
            <a href="<?php echo ENTRY_URL; ?>" class="header__nav-link header__cta">
              <span class="header__cta-text">説明会<br>予約済みの方へ</span>
            </a>
          </li>

        </ul>
      </nav>

      <button class="header__menu-btn js-menu-btn" aria-label="メニューを開く">
        <span class="header__menu-btn-line-top"></span>
        <span class="header__menu-btn-line-bottom"></span>
      </button>

    </div>
  </header>

  <div class="drawer js-drawer">
    <div class="drawer__inner">
      <nav class="drawer__nav">
        <ul class="drawer__nav-list">
          <li class="drawer__nav-item">
            <a href="<?php echo ABOUT_URL; ?>" class="drawer__nav-link">
              <span class="drawer__nav-text">当校について</span>
              <span class="drawer__nav-icon"><img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="右矢印" width="15" height="15" loading="lazy" class="drawer__nav-icon-img"></span>
            </a>
          </li>
          <li class="drawer__nav-item">
            <a href="<?php echo SCHOOL_URL; ?>" class="drawer__nav-link">
              <span class="drawer__nav-text">スクール紹介</span>
              <span class="drawer__nav-icon"><img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="右矢印" width="15" height="15" loading="lazy" class="drawer__nav-icon-img"></span>
            </a>
          </li>
          <li class="drawer__nav-item">
            <a href="<?php echo FAQ_URL; ?>" class="drawer__nav-link">
              <span class="drawer__nav-text">よくある質問</span>
              <span class="drawer__nav-icon"><img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="右矢印" width="15" height="15" loading="lazy" class="drawer__nav-icon-img"></span>
            </a>
          </li>
          <li class="drawer__nav-item">
            <a href="<?php echo NEWS_URL; ?>" class="drawer__nav-link">
              <span class="drawer__nav-text">お知らせ</span>
              <span class="drawer__nav-icon"><img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="右矢印" width="15" height="15" loading="lazy" class="drawer__nav-icon-img"></span>
            </a>
          </li>
        </ul>
        <div class="drawer__nav-cta">
          <a href="<?php echo ENTRY_URL; ?>" class="drawer__nav-cta-link">説明会予約済みの方へ</a>
        </div>
      </nav>
      <div class="drawer__info">
       <div class="drawer__info-inner">
          <div class="drawer__info-notice">
            <p class="drawer__info-notice-text">
            無料レッスン説明会のご予約は各校へお電話ください。
            </p>
          </div>
          <div class="drawer__info-body">
            <div class="drawer__info-title">
              <img src="<?php echo IMAGEPATH; ?>/common/school-name.webp" alt="grayhound english school" width="338" height="25.5" loading="lazy" class="drawer__info-title-img">
            </div>
            <p class="drawer__info-text">
            【堺東校】 〒590-0031 大阪府堺市堺区五月町 4-24<br>
              TEL: <a href="tel:072-222-4677">072-222-4677</a>
            </p>
            <p class="drawer__info-text">
            【泉北校】 〒590-0153 大阪府堺市南区大庭寺 569-6<br>
              TEL: <a href="tel:072-299-9480">072-299-9480</a>
            </p>
            <p class="drawer__info-link">
              <a href="<?php echo PRIVACY_POLICY_URL; ?>" class="drawer__info-privacy">プライバシーポリシー</a>
            </p>
            <small class="drawer__info-copy">
            Copyright &copy;  Grayhound English School
            </small>
          </div>
       </div>
      </div>
    </div>
  </div>