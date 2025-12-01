<?php
/*
* Template Name: トップページ
*/
?>
<?php get_header(); ?>

<main>

  <section class="mv">
    <div class="mv__title">
      <picture>
        <source srcset="<?php echo IMAGEPATH; ?>/common/school-name-sp.webp" media="(max-width: 767px)"
          type="image/webp" width="375" height="440">
        <img src="<?php echo IMAGEPATH; ?>/common/school-name.webp" alt="Grayhound English School" width="1063" height="80" loading="eager" decoding="async" fetchpriority="high" class="mv__title-img">
      </picture>
    </div>
    <div class="mv__inner">
      <div class="mv__swiper swiper js-mv-swiper">
        <div class="mv__swiper-wrapper swiper-wrapper">
          <div class="mv__swiper-slide swiper-slide">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/mv01-sp.webp" media="(max-width: 767px)" type="image/webp"
                width="375" height="525">
              <img src="<?php echo IMAGEPATH; ?>/top/mv01.webp" alt="青い屋根と赤い縁取りが特徴的なユニークなデザインの建物外観" width="1440" height="900" loading="eager" decoding="async" fetchpriority="high" class="mv__slide-img">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/mv02-sp.webp" media="(max-width: 767px)" type="image/webp"
                width="375" height="525">
              <img src="<?php echo IMAGEPATH; ?>/top/mv02.webp" alt="青空の下、自由の女神像が屋上にそびえる赤い縁と青い屋根の校舎とグレイハウンドイングリッシュスクールの送迎バス" width="1440" height="900" loading="lazy" decoding="async" class="mv__slide-img">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo IMAGEPATH; ?>/top/mv03-sp.webp" media="(max-width: 767px)" type="image/webp"
                width="375" height="525">
              <img src="<?php echo IMAGEPATH; ?>/top/mv03.webp" alt="先生と園児が教室で楽しくアルファベットブロックを持って遊んでいる様子" width="1440" height="900" loading="lazy" decoding="async" class="mv__slide-img">
            </picture>
          </div>
        </div>
      </div>
    </div>
    <div class="mv__scroll-down">
      <p class="scroll-down">scroll</p>
    </div>
  </section>

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

  <section class="top-news">
    <div class="top-news__inner">
      <div class="top-news__content">
        <div class="top-news__head js-fade-in">
          <div class="top-news__title-wrap">
            <h2 class="top-news__title">
              <img src="<?php echo IMAGEPATH; ?>/common/news-title.webp" alt="NEWS" width="190" height="53" loading="lazy" class="top-news__title-img">
            </h2>
            <p class="top-news__subtitle">お知らせ</p>
          </div>
          <div class="top-news__logo-wrap">
            <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="地球と子どもたちが描かれたカラフルなイラスト" width="163" height="172" loading="lazy" class="top-news__logo-img">
          </div>
        </div>
        <?php
          $news_args = array(
            'post_type' => 'news',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $news_query = new WP_Query($news_args);
        ?>
        <?php if ($news_query->have_posts()) : ?>
          <ul class="top-news__list js-top-news-list">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
              <li class="top-news__item">
                <a href="<?php the_permalink(); ?>" class="top-news__link">
                  <time class="top-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  <div class="top-news__text-wrap">
                    <p class="top-news__item-title"><?php the_title(); ?></p>
                    <span class="top-news__icon"><img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="" width="14" height="14" loading="lazy" class="top-news__icon-img" aria-hidden="true"></span>
                  </div>
                </a>
              </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        <?php else : ?>
          <p class="news__no-posts" style="text-align: center; font-size:14px; font-weight: 600; letter-spacing: 0.06em;">現在、お知らせはありません</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="top-point">
    <div class="top-point__inner">
      <div class="top-point__swiper swiper js-top-point-swiper">
        <ul class="top-point__list swiper-wrapper">
          <li class="top-point__item swiper-slide js-fade-in">
            <div class="top-point__label">POINT.1</div>
            <p class="top-point__text">
              1975年設立の歴史のある子ども英会話スクール。<br>
              英語を通じて子供たちに「夢」を<br>与える学校であり続けます。
            </p>
          </li>
          <li class="top-point__item swiper-slide js-fade-in --delay-2">
            <div class="top-point__label">POINT.2</div>
            <p class="top-point__text">
              「話すこと」に重点を置いた内容の濃いレッスンで、<br>
              子供達に「話せた！」という喜びを与えます。
            </p>
          </li>
          <li class="top-point__item swiper-slide js-fade-in --delay-3">
            <div class="top-point__label">POINT.3</div>
            <p class="top-point__text">
              日本人講師は、英検1級合格者や海外の大学を卒業した講師。外国人講師は、子供が大好きで熱意のある講師を採用。
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="top-about" id="about">
    <div class="top-about__inner">
      <div class="top-about__logo-img-wrap js-fade-in">
        <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="地球と子どもたちが描かれたカラフルなイラスト" width="163" height="172" loading="lazy" class="top-about__logo-img">
      </div>
      <h2 class="top-about__title js-fade-in">
        <img src="<?php echo IMAGEPATH; ?>/common/about-title.webp" alt="ABOUT GRAYHOUND" width="643" height="58" loading="lazy" class="top-about__title-img">
      </h2>
      <p class="top-about__subtitle js-fade-in">当校について</p>
      <p class="top-about__text js-fade-in">
        1975年、たった1台のバスを教室として<br>
        グレイハウンドはスタートしました。<br>
        当時の生徒は15名。<br>
        そしてその生徒達が大人になり、父や母となって、<br>
        自分たちの子どもを通わせてくれるスクールとなりました。
      </p>
      <p class="top-about__text top-about__text--last js-fade-in">
        これからもキビしく、そして楽しいレッスンを。
      </p>
    </div>
  </section>

  <section class="top-about-detail">
    <div class="top-about-detail__inner">
      <ul class="top-about-detail__list">
        <li class="top-about-detail__item top-about-detail__item--01">
          <div class="top-about-detail__body js-fade-in">
            <p class="top-about-detail__number">1. 施設について</p>
            <p class="top-about-detail__text">
              グレイハウンドの校舎は、全て当校所有の校舎です。レッスン前には広い遊び場で思いっきり遊び、リラックスしてから教室へ入ります。また年間を通じて様々なイベントが行なわれます。子供たちは、当校所有の施設で、安心して英語に触れ合うことができます。
            </p>
          </div>
          <div class="top-about-detail__img-wrap js-scaleImg --delay-2">
            <img src="<?php echo IMAGEPATH; ?>/top/top-about-detail-01.webp" alt="グレイハウンドの校舎外観の写真" width="448" height="297" loading="lazy" class="top-about-detail__img">
          </div>
        </li>
        <li class="top-about-detail__item top-about-detail__item--02">
          <div class="top-about-detail__body js-fade-in">
            <p class="top-about-detail__number">2. レッスンについて</p>
            <p class="top-about-detail__text">
              「話すこと」が中心のレッスンでは、英語を声に出して先生や友達と会話練習を行います。教室からは、いつもたくさんの英語と笑い声が聞こえてきます。当校は英会話スクールですので「書くこと」ではなく、「話すこと」に重点を置いてレッスンをしています。
            </p>
          </div>
          <div class="top-about-detail__img-wrap js-scaleImg --delay-2">
            <img src="<?php echo IMAGEPATH; ?>/top/top-about-detail-02.webp" alt="子どもたちに本を読む講師の写真" width="351" height="351" loading="lazy" class="top-about-detail__img">
          </div>
        </li>
        <li class="top-about-detail__item top-about-detail__item--03">
          <div class="top-about-detail__body js-fade-in">
            <p class="top-about-detail__number">3. オリジナル教材について</p>
            <p class="top-about-detail__text">
              入学時にお渡しするテキストで、現在進行形・過去形・未来形・比較級まで会話練習を行います。ひんぱんな教材購入は不要です。
            </p>
          </div>
          <div class="top-about-detail__img-wrap js-scaleImg --delay-2">
            <img src="<?php echo IMAGEPATH; ?>/top/top-about-detail-03.webp" alt="グレイハウンドのオリジナル教材の写真" width="400" height="400" loading="lazy" class="top-about-detail__img">
          </div>
        </li>
        <li class="top-about-detail__item top-about-detail__item--04">
          <div class="top-about-detail__body js-fade-in">
            <p class="top-about-detail__number">4. システムについて</p>
            <div class="top-about-system__block top-about-system__block--01">
              <p class="top-about-system__heading">★入学対象学年</p>
              <p class="top-about-system__text">
                新年長の春〜小学４年の秋。一貫システムのため、小学５年以上の入学不可。
              </p>
            </div>
            <div class="top-about-system__block top-about-system__block--02">
              <p class="top-about-system__heading">★入学金と授業料</p>
              <div class="top-about-system__fee-box">
                <p class="top-about-system__fee-text">入学金　21000円</p>
                <p class="top-about-system__fee-text">授業料　9500円/月 （週1回60分レッスン/年間48回）</p>
              </div>
              <p class="top-about-system__note">
                ※上記は基礎コースの授業料です。<br>
                ※小３、小４の新入生は２時間レッスンとなり、金額が異なります。
              </p>
              <p class="top-about-system__feature">
                ◎欠席した場合、振替レッスンを受講できます。<br>
                ◎スクールバスは無料で利用することができます。
              </p>
            </div>
          </div>
          <div class="top-about-detail__img-wrap js-scaleImg --delay-2">
            <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="地球と子どもたちが描かれたスクールロゴ" width="277" height="293" loading="lazy" class="top-about-detail__img">
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="top-school" id="school">
    <div class="top-school__inner">
      <div class="top-school__head js-fade-in">
        <div class="top-school__title-wrap">
          <div class="top-school__title-logo">
            <img src="<?php echo IMAGEPATH; ?>/common/logo.webp" alt="地球と子どもたちが描かれたカラフルなイラスト" width="64" height="67" loading="lazy" class="top-school__title-logo-img">
          </div>
          <h2 class="top-school__title"><img src="<?php echo IMAGEPATH; ?>/common/school-title.webp" alt="SCHOOL" width="259" height="48" loading="lazy" class="top-school__title-img"></h2>
          <p class="top-school__subtitle">スクール紹介</p>
        </div>
        <p class="top-school__notice">無料レッスン説明会のご予約は各校へお電話ください。</p>
      </div>
      <div class="top-school__campus-wrap">
        <div class="top-school__campus top-school__campus--sakaihigashi js-fade-in">
          <div class="top-school__campus-main">
            <div class="top-school__img-wrap top-school__img-wrap--main">
              <img src="<?php echo IMAGEPATH; ?>/top/top-school-sakaihigashi-01.webp" alt="青い屋根と白い外壁の堺東校の校舎外観" width="640" height="400" loading="lazy" class="top-school__img top-school__img--main">
            </div>
          </div>
          <div class="top-school__campus-side">
            <div class="top-school__side-block">
              <div class="top-school__img-wrap top-school__img-wrap--sub">
                <img src="<?php echo IMAGEPATH; ?>/top/top-school-sakaihigashi-02.webp" alt="堺東校の看板と建物の写真" width="318" height="199" loading="lazy" class="top-school__img top-school__img--sub">
              </div>
              <div class="top-school__info">
                <p class="top-school__campus-name">堺東校</p>
                <p class="top-school__address">
                  〒590-0031 <br class="u-mobile">大阪府堺市堺区五月町4-24<br>
                  <a href="tel:072-222-4677" class="top-school__tel">TEL: 072-222-4677</a>
                </p>
              </div>
            </div>
            <p class="top-school__time">月・水・木・金（15:00〜）/ 土（9:30〜）</p>
          </div>
        </div>
        <div class="top-school__campus top-school__campus--senboku top-school__campus--reverse js-fade-in">
          <div class="top-school__campus-main">
            <div class="top-school__img-wrap top-school__img-wrap--main">
              <img src="<?php echo IMAGEPATH; ?>/top/top-school-senboku-01.webp" alt="赤と青の屋根が印象的な泉北校の校舎外観" width="640" height="400" loading="lazy" class="top-school__img top-school__img--main">
            </div>
          </div>
          <div class="top-school__campus-side">
            <div class="top-school__side-block">
              <div class="top-school__img-wrap top-school__img-wrap--sub">
                <img src="<?php echo IMAGEPATH; ?>/top/top-school-senboku-02.webp" alt="泉北校の案内看板と建物の写真" width="318" height="199" loading="lazy" class="top-school__img top-school__img--sub">
              </div>
              <div class="top-school__info">
                <p class="top-school__campus-name">泉北校</p>
                <p class="top-school__address">
                  〒590-0153 <br class="u-mobile">大阪府堺市南区大庭寺569-6<br>
                  <a href="tel:072-299-9480" class="top-school__tel">TEL: 072-299-9480</a>
                </p>
              </div>
            </div>
            <p class="top-school__time">月・火・水・金（15:00〜）/ 土（13:30〜）</p>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>