<?php get_header(); ?>

<main>

  <section class="sub-mv">
    <h1 class="sub-mv__title">お知らせ</h1>
  </section>

  <section class="news">
    <div class="news__inner">
      <div class="news__content">
        <?php if (have_posts()) : ?>
          <ul class="news__list">
            <?php while (have_posts()) : the_post(); ?>
              <li class="news__item">
                <a href="<?php the_permalink(); ?>" class="news__link">
                  <div class="news__item-text">
                    <time class="news__item-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                    <p class="news__item-title"><?php the_title(); ?></p>
                  </div>
                  <span class="news__item-icon">
                    <img src="<?php echo IMAGEPATH; ?>/common/arrow-right.webp" alt="" width="14" height="14" loading="lazy" class="news__item-icon-img" aria-hidden="true">
                  </span>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php if ($wp_query->max_num_pages > 1) : ?>
            <div class="news__pagination news__pagination--pc">
              <?php get_template_part('parts/pagination'); ?>
            </div>
          <?php endif; ?>
        <?php else : ?>
          <p class="news__no-posts" style="text-align: center; font-size:16px; font-weight: 600; letter-spacing: 0.06em;">現在、お知らせはありません</p>
        <?php endif; ?>
      </div>
      <?php if ($wp_query->max_num_pages > 1) : ?>
        <div class="news__pagination news__pagination--sp">
          <?php get_template_part('parts/pagination'); ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>