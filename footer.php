<footer>

  <div class="footer-top">

    <div class="title"><a href="<?php echo home_url(); ?>">
        <?php the_custom_logo();
        if (!has_custom_logo()) { ?><?php bloginfo('name'); ?><?php } ?>
      </a></div>
    <div class="contact"><a href="https://watsunblog.com/contact/">お問い合わせ</a></div>

  </div>



  <div class="sns">
    <p>こちら↓も定期的に更新しております！</p>
    <ul class="snsbtniti">
      <li><a class="flowbtn7 fl_tw7" href="https://mobile.twitter.com/watsunblog" target="_blank">
          <i class="fab fa-twitter"></i>
        </a></li>
      <li><a class="flowbtn7 insta_btn7" href="https://www.instagram.com/watsunblog" target="_blank">
          <i class="fab fa-instagram"></i>
        </a></li>
    </ul>
  </div>

  <div class="footer-nav-area">
    <?php wp_nav_menu(array(
      'theme_location' => 'footer-nav',
      'container' => 'nav',
      'container_class' => 'footer-nav',
      'container_id' => 'footer-nav',
      'fallback_cb' => ''
    )); ?>
  </div>



  <div class="footer-bottom">

    <div class="bonus">
      <a href="https://watsunblog.com/privacypolicy/">
        <p class="">プライバシーポリシー</p>
      </a>
      <a href="https://watsunblog.com/terms-of-service">
        <p class="">利用規約</p>
      </a>

      <a href="https://watsunblog.com/sitemap.xml">
        <p class="">サイトマップ</p>
      </a>
    </div>
    <div class="copyright">
      <p>Copyright ©<?php bloginfo('name'); ?> All Rights Reserved.</p>
    </div>

  </div>


</footer>
<?php wp_footer(); ?>
</body>

</html>