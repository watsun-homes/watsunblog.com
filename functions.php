<?php
add_theme_support('title-tag');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
add_theme_support('custom-background', $custom_bgcolor_defaults);
add_theme_support('custom-logo');



//カスタムメニュー
register_nav_menu('header-nav',  ' ヘッダーナビゲーション ');
register_nav_menu('footer-nav',  ' フッターナビゲーション ');
//カスタムメニュー



//ブログ一覧”news”カテゴリー除外
function exclude_category($query)
{
  if ($query->is_home() && $query->is_main_query()) {
    $query->set('cat', '-387'); //マイナスをつけてカテゴリIDを除外する
  }
}
add_action('pre_get_posts', 'exclude_category');
//ブログ一覧”news”カテゴリー除外

//サイト内検索から固定ページを除外
function SearchFilter($query)
{
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts', 'SearchFilter');
//サイト内検索から固定ページを除外

// サイドバーヴィジェットのカテゴリー表示で特定のカテゴリーを除外する
function exclude_widget_categories($args)
{
  $exclude = '-387';          // 除外するカテゴリーのIDをカンマ区切りで指定
  $args['exclude'] = $exclude;
  return $args;
}
add_filter('widget_categories_args', 'exclude_widget_categories');

//サイドバーにウィジェット追加
function widgetarea_init()
{
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'side-widget',
    'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="sidebar-title">',
    'after_title' => '</h4>'
  ));
}
add_action('widgets_init', 'widgetarea_init');
//サイドバーにウィジェット追加終わり





//サイドバー追従ウィジェット
register_sidebars(
  1,
  array(
    'name' => 'スクロール追従領域',
    'id' => 'sidebar-scroll',
    'description' => 'サイドバーで下にスクロールすると追いかけてくるエリアです。',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  )
);
//サイドバー追従ウィジェット






if (trim($GLOBALS['stdata62']) !== '') {
  $heightpx = $GLOBALS['stdata62'];
} else {
  $heightpx = 500;
}
if (trim($GLOBALS['stdata70']) !== '') {
  $headerwidthpx = $GLOBALS['stdata70'];
} else {
  $headerwidthpx = 2200;
}



//カスタムヘッダー呼び出し
add_theme_support('custom-header');
$custom_header = array(
  'random-default' => false,
  'width' => $headerwidthpx,
  'height' => $heightpx,
  'flex-height' => true,
  'flex-width' => false,
  'default-text-color' => '',
  'header-text' => false,
  'uploads' => true,
  'default-image' => get_stylesheet_directory_uri() . '/images/af.png',
);
add_theme_support('custom-header', $custom_header);
//カスタムヘッダー呼び出し




//コメント欄
function my_list_comments($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
    <div id="comment-<?php comment_ID(); ?>">

      <div class="comment-listCon">
        <div class="comment-info vcard">
          <span class="comment-author">
            <?php echo get_avatar($comment, 32); //アバター画像 48
            ?>
            <?php printf(__('名前:<cite class="fn">%s<span class=""></span></cite> :'), get_comment_author_link()); //投稿者の設定 
            ?>
          </span>
          <span class="comment-datetime">投稿日：<?php printf(__('%1$s at %2$s'), get_comment_date('Y/m/d'),  get_comment_time('H:i')); //投稿日の設定 
                                              ?></span>
          <span class="comment-edit"><?php edit_comment_link(__('Edit'), '  ', ''); //編集リンク 
                                      ?></span>
        </div>
        <?php if ($comment->comment_approved == '0') : //コメント承認前 
        ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
        <?php endif; ?>
        <div class="comment-text">
          <?php comment_text(); //コメント本文 
          ?>
        </div>
      </div>
    </div>
  <?php
}
//コメント欄



//記事呼び出し
function shortcode_kiji()
{ ?>

  <?php }

add_shortcode('sc_kiji', 'shortcode_kiji'); ?>








  <?php
  //ブログリンクカード
  function ltl_get_the_excerpt($post_id)
  {
    global $post;
    $post_bu = $post;
    $post = get_post($post_id);
    setup_postdata($post_id);
    $output = get_post_meta($post_id, '_aioseop_description', true); //AllinOneSEOから
    $post = $post_bu;
    return $output;
  }

  //ショートコード
  function nlink_scode($atts)
  {
    extract(shortcode_atts(array(
      'url' => "",
      'title' => "",
      'excerpt' => ""
    ), $atts));

    $id = url_to_postid($url); //URLから投稿IDを取得

    $no_image = 'noimageに指定したい画像があればここにパス'; //アイキャッチ画像がない場合の画像を指定

    //タイトルを取得
    if (empty($title)) {
      $title = esc_html(get_the_title($id));
    }
    //抜粋文を取得
    if (empty($excerpt)) {
      $excerpt = esc_html(ltl_get_the_excerpt($id));
    }

    //アイキャッチ画像を取得
    if (has_post_thumbnail($id)) {
      $img = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'medium');
      $img_tag = "<img src='" . $img[0] . "' alt='{$title}'/>";
    } else {
      $img_tag = '<img src="' . $no_image . '" alt="" width="' . $img_width . '" height="' . $img_height . '" />';
    }

    $nlink .= '
<div class="blog-card">
<a href="' . $url . '">
<div class="blog-card-label">関連記事</div>
<div class="blog-card-thumbnail">' . $img_tag . '</div>
<div class="blog-card-content">
<div class="blog-card-title">' . $title . ' </div>
<div class="blog-card-excerpt">' . $excerpt . '</div>
</div>
<div class="clear"></div>
</a>
</div>';

    return $nlink;
  }

  add_shortcode("nlink", "nlink_scode");
  //ブログリンクカード
  ?>