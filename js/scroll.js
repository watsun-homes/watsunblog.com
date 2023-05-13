// PC用のサイドバー固定
    
(function(){
	 $(function(){
         

		 var fix = $('#sidebar-scroll'), //固定したいコンテンツ
		 side = $('#sidebar'), //サイドバーのID
		 main = $('.kiji'), //固定する要素を収める範囲
		 sideTop = side.offset().top, //サイドバートップ位置
		 fixTop = fix.offset().top, //固定コンテンツのトップ位置
		 mainTop = main.offset().top, //記事のトップ位置
		 w = $(window); //ブラウザ上から確認できるもの

		 var adjust = function(){
             
			 fixTop = fix.css('position') === 'static' ? sideTop + fix.position().top : fixTop;
			 var fixHeight = fix.outerHeight(true), //固定コンテンツの高さ
			 mainHeight = main.outerHeight(), //記事の高さ
            mainall = mainTop + mainHeight,
            sideHeight = side.outerHeight(), //サイドバーの高さ
            mainbottom = mainTop + mainHeight,
			 winTop = w.scrollTop();

             
			 if(winTop + fixHeight >= mainTop + mainHeight){ //固定終わった時
				fix.css({
                    position: 'absolute',
                    top: mainall - sideHeight,
                    bottom: '',
                    margin: 0
                });
                 //スクロール位置＋固定コンテンツ高さ＞記事トップ＋記事高さ
			}else if(winTop >= fixTop){　//固定する時
				fix.css({
                    position: 'fixed',
                    top: '10px',
                    bottom: 'auto',
                    left: 'auto',
                });
			}else{ //固定前
				fix.css({
                    position: 'static',
                });
            }
             
		 }

		 w.on('scroll', adjust);
         
         
        
	 });
})(jQuery);

