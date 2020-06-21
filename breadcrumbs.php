<?php
//閲覧者が開いているページが投稿記事ページ、固定ページ、添付ファイルページだった場合の条件分岐
if( is_singular()) {
    
    echo '<div id="breadcrumb">';
    
    
    //topの表示
      echo '<div itemtype="http://schema.org/BreadcrumbList" itemscope="" itemprop="itemListElement">
      <a href="'.get_bloginfo('url').'" itemprop="url">
      <span itemprop="name">TOP</span>
      </a>
      <span class="sp">&gt;</span></div>';
    
    
    
    
    
    //投稿ページの時のみカテゴリーを表示
	if ( is_single() ) {
        
        // 記事のカテゴリー情報を取得する
        $cat = get_the_category();
        
        
        if($cat && !is_wp_error($cat)){
            
        echo '<div itemtype="http://schema.org/BreadcrumbList" itemscope="" itemprop="itemListElement">
        <a href="'.get_category_link($cat[0]->term_id).'" itemprop="url">
        <span itemprop="name">'.$cat[0]->name.'</span>
        </a>
        <span class="sp">&gt;</span></div>';
            
        }
        
        
        //親カテゴリー取得
      $par = get_category($cat[0]->parent);
      
    //取得できていたら以下を実行
      while($par && !is_wp_error($par) && $par->term_id != 0){
          
          //親カテゴリー表示
           $echo = '<div itemtype="http://schema.org/BreadcrumbList" itemscope="" itemprop="itemListElement">
           <a href="'.get_category_link($par->term_id).'" itemprop="url"><span itemprop="name">'.$par->name.'</span></a><span class="sp">&gt;</span></div>'.$echo;
          
           $par = get_category($par->parent);
          
      }
        
		
	}
    
    //ページのタイトルを表示
	the_title();
    
    
    echo '</div><!-- /#breadcrumb -->';
    
}


?>