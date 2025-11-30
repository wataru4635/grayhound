<?php
/*
Template Name: 説明会予約済みの方へ
*/
?>

<?php get_header(); ?>

<main>
<section class="entry">
  <div class="entry__inner">

    <h2 class="entry__title">説明会予約済みの方へ</h2>

    <?php
    function entry_preserve_br_sp($text) {
      if (empty($text)) return $text;
      $placeholder = "__BRSP__";
      $text = preg_replace('/<br\s+class=["\']sp["\']\s*\/?>/i', $placeholder, $text);
      $text = nl2br(esc_html($text));
      $text = str_replace($placeholder, '<br class="sp">', $text);
      return $text;
    }
    ?>

    <?php
    $entry_lead = get_field('entry_lead');
    if ( $entry_lead ) : ?>
      <p class="entry__lead">
        <?php echo entry_preserve_br_sp($entry_lead); ?>
      </p>
    <?php endif; ?>

    <?php
    $entry_note = get_field('entry_note');
    if ( $entry_note ) : ?>
      <p class="entry__note">
        <?php echo entry_preserve_br_sp($entry_note); ?>
      </p>
    <?php endif; ?>

    <div class="entry__content">
      <div class="entry__schools">
        <?php
        $school_keys = array( 'school_1', 'school_2' );
        foreach ( $school_keys as $school_key ) :
          $school = get_field( $school_key );
          if ( ! $school ) {
            continue;
          }

          $school_name      = isset( $school['school_name'] ) ? $school['school_name'] : '';
          $school_time      = isset( $school['school_time'] ) ? $school['school_time'] : '';
          $school_address   = isset( $school['school_address'] ) ? $school['school_address'] : '';
          $school_map_url   = isset( $school['school_map_url'] ) ? $school['school_map_url'] : '';
          $school_attention = isset( $school['school_attention'] ) ? $school['school_attention'] : '';
        ?>

          <div class="entry__school">
            <?php if ( $school_name ) : ?>
              <h3 class="entry__school-name">
                <?php echo esc_html( $school_name ); ?>
              </h3>
            <?php endif; ?>

            <?php if ( $school_time ) : ?>
              <p class="entry__school-time">
                <?php echo entry_preserve_br_sp( $school_time ); ?>
              </p>
            <?php endif; ?>

            <?php if ( $school_address || $school_map_url ) : ?>
              <p class="entry__school-address">
                <?php if ( $school_address ) : ?>
                  <?php echo entry_preserve_br_sp( $school_address ); ?>
                <?php endif; ?>

                <?php if ( $school_map_url ) : ?>
                  <a href="<?php echo esc_url( $school_map_url ); ?>"
                     class="entry__school-map"
                     target="_blank"
                     rel="noopener noreferrer">
                    （Googleマップ）
                  </a>
                <?php endif; ?>
              </p>
            <?php endif; ?>

            <?php if ( $school_attention ) : ?>
              <p class="entry__school-attention">
                <?php echo entry_preserve_br_sp( $school_attention ); ?>
              </p>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>

      <?php
      $cautions = get_field('entry_cautions');

      if ( $cautions ) :
        $has_caution = false;
        for ( $i = 1; $i <= 6; $i++ ) {
          if ( ! empty( $cautions[ 'caution_' . $i ] ) ) {
            $has_caution = true;
            break;
          }
        }

        if ( $has_caution ) : ?>
          <ol class="entry__cautions">
            <?php for ( $i = 1; $i <= 6; $i++ ) :
              $key   = 'caution_' . $i;
              $text  = isset( $cautions[ $key ] ) ? $cautions[ $key ] : '';

              if ( ! $text ) {
                continue;
              }
            ?>
              <li class="entry__caution-item">
                <?php echo entry_preserve_br_sp( $text ); ?>
              </li>
            <?php endfor; ?>
          </ol>
        <?php endif; ?>
      <?php endif; ?>

    </div>
  </div>
</section>


</main>

<?php get_footer(); ?>