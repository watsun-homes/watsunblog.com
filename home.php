<?php get_header(); ?>
<div class="container">
    
    <!-- トップ -->
	<div class="cp_cssslider">
        <div class="topleft">
         <img src="<?php echo get_template_directory_uri(); ?>/images/topleft.png" alt="no-img"/>
        </div>
        <div class="topright">
        <div class="moji">
            <h2>Web制作・システム開発</h2>
            <h3>個人でWeb制作・システム開発を行っているワトスンです！サイトやサービスを制作しており、SEO対策をとことん追求しております。また、ブログでは生活で役に立つ情報や、知っておくと便利な知識などを集めた記事が揃っています。Web制作依頼の詳細は下↓のボタンから</h3>
            <div id="topbtn">
                <a href="https://watsunblog.com/制作依頼/"><span class ="topbtn">Web制作依頼の詳細</span></a>
            </div>
        </div>
        </div>
    </div>
    <!-- トップ ここまで -->
    
    
  <div class="contents">
      <div class="contentslist">
      
      
      

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class( 'kiji-list' ); ?>>
      <a class="list-up" href="<?php the_permalink(); ?>">
        <!--画像を追加-->
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail('full'); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.gif" alt="no-img"/>
        <?php endif; ?>
        <div class="text">
          <!--投稿日を表示-->
          <span class="kiji-date">
            <i class="fas fa-pencil-alt"></i>
            <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
              <?php echo get_the_date(); ?>
            </time>
          </span>
            <!--カテゴリ-->
          <?php if (!is_category()): ?>
            <?php if( has_category() ): ?>
              <span class="cat-data">
              <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
            <?php endif; ?>
          <?php endif; ?>
             <!--タイトル-->
          <h3><?php the_title(); ?></h3>
        </div>
      </a>
    </article>

    <?php endwhile; endif; ?><!--ループ終了-->

    <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
      ) ); ?>
    </div>
  </div>
    </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>