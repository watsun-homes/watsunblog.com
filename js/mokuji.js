
//$(windows).onload(function(){
$(function(){
    scrollToggleClass(".post-3047","h2","show");
});

function scrollToggleClass(rangeTarget,addTarget,classname){
    if($(rangeTarget).length){
        scroll = $(window).scrollTop();//ウィンドウの一番上を取得
        startPos = $(rangeTarget).offset().top;
        endPos = startPos + $(rangeTarget).outerHeight();
        if(scroll > startPos && scroll < endPos){
            $(addTarget).addClass(classname);
        }else{
            $(addTarget).removeClass(classname);
        }
       }
};
    
var oya = document.getElementById("toc_container");
var kodomo = document.getElementById("toc_title");
var talk = document.getElementsByClassName("talkcontent")[0];

var newElement = document.createElement("div"); 
var newContent = document.createTextNode("なぜ"); 
newElement.appendChild(newContent); 
newElement.setAttribute("id","mokuji_fix"); 

oya.insertBefore(newElement,kodomo);


    //});
//もし目次の内容の箇所が表示されていたらその時はずっとその目次を右上に表示し
//h2とh3のspan内の文字を取得して右上に表示
//指定の要素までスクロールされたらその要素を取得
//要素の高さを取得して次の指定要素が来るまでそれを表示
//要素の高さを取得→