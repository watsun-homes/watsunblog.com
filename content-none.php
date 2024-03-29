<div class="content-none">



  <?php if (is_404()) {
    // 404ページの場合
    echo 'いつもワトスンブログをご覧頂きありがとうございます。大変申し訳ないのですが、あなたがアクセスしようとしたページは削除されたかURLが変更されています。お手数をおかけしますが、以下の方法からもう一度目的のページをお探し下さい。';
  } elseif (is_search()) {
    // 検索結果ページの場合
    $r = get_search_query();
    echo "いつもワトスンブログをご覧頂きありがとうございます。「.'$r'.」で検索しましたがページが見つかりませんでした。お手数をおかけしますが、以下の方法からもう一度目的のページをお探し下さい。";
  } ?>

  <h2>１．検索して見つける</h2>
  <!-- 検索ボックスを設置 -->
  <p>検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。それに近しいページのリストが表示されます。</p>
  <?php get_search_form(); ?>

  <h2>２．人気の記事から見つける</h2>
  <!-- 人気の記事一覧を表示 -->
  <?php

  // クエリ
  $args = array(
    'showposts' => 20,
    'meta_key'  => 'views',
    'orderby'   => 'meta_value_num',
    'order'     => 'DESC'
  );
  $the_query = new WP_Query($args);

  // ループ
  echo '<ol>';
  $i = 1;
  while ($the_query->have_posts()) : $the_query->the_post();
  ?>
    <li class="content-none-views content-none-views-<?php echo $i; ?>">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </li>
  <?php
    $i++;
  endwhile;
  // 投稿データをリセット
  wp_reset_postdata();
  echo '</ol>';

  ?>


  <h2>３．カテゴリーから見つける</h2>
  <!-- カテゴリー一覧を表示 -->
  <p>それぞれのカテゴリーのトップページからもう一度目的のページをお探しになってみて下さい。</p>
  <?php
  wp_list_categories(
    array(
      'title_li'  => '',
      'depth' => 1
    )
  );
  ?>


  <h2>４．無効なリンクを報告する</h2>
  <!-- 無効なリンクを表示 -->
  <p>もし当サイト内で無効なリンクを発見された場合、どのページのどのリンクが無効だったかをご報告頂けると幸いです。今後とも、使いやすいサイトになるよう精進させていただきますのでよろしくお願いいたします。</p>


</div>