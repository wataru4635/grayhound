<?php if ($wp_query->max_num_pages > 1): ?>
  <div class="pagination">
    <?php 
      $prev_link = get_previous_posts_link('');
      $next_link = get_next_posts_link('');

      if ($prev_link) {
        echo str_replace('<a', '<a class="pagination__prev"', $prev_link);
      }

      if ($next_link) {
        echo str_replace('<a', '<a class="pagination__next"', $next_link);
      }
    ?>
  </div>
<?php endif; ?>
