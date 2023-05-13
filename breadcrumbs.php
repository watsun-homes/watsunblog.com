<?php
if (is_single()) {
    
  $cat = get_the_category(); //$catにカテゴリーを代入
    
  if($cat && !is_wp_error($cat)){
      
      $par = get_category($cat[0]->parent);
      
      echo '<div id="breadcrumb"　itemscope itemtype="https://schema.org/BreadcrumbList">';
      
      echo '<div itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><a href="'.get_bloginfo('url').'" itemprop="item"><span itemprop="name">ホーム</span></a><span class="sp">&gt;</span><meta itemprop="position" content="1" /></div>';
      
      while($par && !is_wp_error($par) && $par->term_id != 0){
          
           $echo = '<div itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><a href="'.get_category_link($par->term_id).'" itemprop="item"><span itemprop="name">'.$par->name.'</span></a><span class="sp">&gt;</span><meta itemprop="position" content="2" /></div>'.$echo;
          
           $par = get_category($par->parent);
          
      }
      
      echo $echo.'<div itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><a href="'.get_category_link($cat[0]->term_id).'" itemprop="item"><span itemprop="name">'.$cat[0]->name.'</span></a><span class="sp">&gt;</span><meta itemprop="position" content="2" /></div>';
      
      echo '<div itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><a href="'.get_permalink().'" itemprop="item"><span itemprop="name">'.get_the_title().'</a></span><meta itemprop="position" content="3" /></div>';
    
      echo '</div><!-- /#breadcrumb -->';
      
      
  }  
}
