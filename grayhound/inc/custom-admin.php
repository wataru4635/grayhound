<?php
// ==========================================================================
// コメントの無効化・投稿非表示
// ==========================================================================
function comment_status_none( $open, $post_id ) {
  $post = get_post( $post_id );
  if( $post->post_type == 'post' ) {
      return false;
  }
  if( $post->post_type == 'page' ) {
      return false;
  }
  if( $post->post_type == 'attachment' ) {
      return false;
  }
  return false;
}

add_filter( 'comments_open', 'comment_status_none', 10 , 2 );
function remove_menus() {
  remove_menu_page( 'edit.php' );
  remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_menus', 999 );

// ==========================================================================
// 「説明会予約済みの方へ」ページでブロックエディター無効化・編集画面非表示・メニュー追加
// ==========================================================================

function disable_gutenberg_for_entry_page($use_block_editor, $post) {
  if (get_page_template_slug($post->ID) === 'page-entry.php') {
    return false;
  }
  return $use_block_editor;
}
add_filter('use_block_editor_for_post', 'disable_gutenberg_for_entry_page', 10, 2);

function hide_editor_for_entry_page() {
  global $pagenow;
  if ($pagenow === 'post.php' || $pagenow === 'post-new.php') {
    $post_id = $_GET['post'] ?? ($_POST['post_ID'] ?? null);
    if (!$post_id) return;
    $template = get_page_template_slug($post_id);
    if ($template === 'page-entry.php') {
      echo '<style>
        .block-editor,
        .editor-styles-wrapper,
        .edit-post-visual-editor,
        .editor-block-list__layout,
        .wp-block,
        .editor-post-title,
        .editor-post-title__block,
        #postdivrich,
        #wp-content-editor-tools,
        #wp-content-editor-container,
        .wp-editor-area {
          display: none !important;
        }
      </style>';
    }
  }
}
add_action('admin_head', 'hide_editor_for_entry_page');

function add_entry_page_menu() {
  $pages = get_pages([
    'meta_key' => '_wp_page_template',
    'meta_value' => 'page-entry.php',
    'post_status' => 'publish',
    'numberposts' => 1,
  ]);
  if (!empty($pages)) {
    $entry_page_id = $pages[0]->ID;
    add_menu_page(
      '説明会予約済みの方へ',
      '説明会予約済みの方へ',
      'edit_pages',
      'post.php?post=' . $entry_page_id . '&action=edit',
      '',
      'dashicons-edit',
      6
    );
  }
}
add_action('admin_menu', 'add_entry_page_menu');

function fix_entry_page_menu_highlight($parent_file) {
  global $pagenow;
  $post_id = $_GET['post'] ?? null;
  if ($pagenow === 'post.php' && $post_id) {
    $template = get_page_template_slug($post_id);
    if ($template === 'page-entry.php') {
      $parent_file = 'post.php?post=' . $post_id . '&action=edit';
    }
  }
  return $parent_file;
}
add_filter('parent_file', 'fix_entry_page_menu_highlight');

