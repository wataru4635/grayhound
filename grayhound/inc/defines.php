<?php
// ==========================================================================
// 定義
// ==========================================================================
/* ---------- パスの短縮 ---------- */
define('IMAGEPATH',            get_template_directory_uri() . '/assets/images');

/* ---------- 各ページのリンク ---------- */
define('HOME_URL',             esc_url(home_url('/')));                       // トップページ
define('ABOUT_URL',            esc_url(home_url('/#about')));                 // 当校について
define('SCHOOL_URL',           esc_url(home_url('/#school')));                // スクール紹介
define('FAQ_URL',              esc_url(home_url('/faq/')));                   // よくある質問
define('ENTRY_URL',            esc_url(home_url('/entry/')));                 // 説明会予約済みの方へ
define('NEWS_URL',             esc_url(home_url('/news/')));                  // お知らせ
define('PRIVACY_POLICY_URL',   esc_url(home_url('/privacy-policy/')));        // プライバシーポリシー