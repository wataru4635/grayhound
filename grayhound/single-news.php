<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">お知らせ</h1>
  </section>

  <section class="post-news">
    <div class="post-news__inner">
      <div class="post-news__content">
        <div class="post-news__header">
          <p class="post-news__date"><?php echo get_the_date('Y.m.d'); ?></p>
          <p class="post-news__title"><?php the_title(); ?></p>
        </div>
        <div class="post-news__body">
          <?php the_content(); ?>
        </div>
        <div class="post-news__back-link post-news__back-link--pc">
          <a href="<?php echo home_url('/news'); ?>" class="post-news__back-link-btn">お知らせ一覧に戻る</a>
        </div>
      </div>
      <div class="post-news__back-link post-news__back-link--sp">
        <a href="<?php echo home_url('/news'); ?>" class="post-news__back-link-btn">お知らせ一覧に戻る</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>