<aside id="sidebar">
  <div class="sidebar-inner">
    <?php dynamic_sidebar('side-widget'); ?>
  </div>
  <?php if (is_single()) : ?>
    <div id="sidebar-scroll">
      <?php dynamic_sidebar('sidebar-scroll'); ?>
    </div>
  <?php endif; ?>
</aside>