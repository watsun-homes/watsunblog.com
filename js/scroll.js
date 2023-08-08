// PC用のサイドバー固定
$(function () {
  var fix = $("#sidebar-scroll");
  var side = $("#sidebar");
  var main = $(".kiji"); //固定する要素を収める範囲
  var sideTop = side.offset().top; //サイドバートップ位置
  var fixTop = fix.offset().top; //固定コンテンツのトップ位置
  var mainTop = main.offset().top; //記事のトップ位置
  var w = $(window); //ブラウザ上から確認できるもの

  var adjust = function () {
    fixTop =
      fix.css("position") === "static" ? sideTop + fix.position().top : fixTop;
    var fixHeight = fix.outerHeight(true); //固定コンテンツの高さ
    var mainHeight = main.outerHeight(); //記事の高さ
    var mainall = mainTop + mainHeight;
    var sideHeight = side.outerHeight(); //サイドバーの高さ
    var mainbottom = mainTop + mainHeight;
    var winTop = w.scrollTop();

    if (winTop + fixHeight >= mainTop + mainHeight) {
      //固定後
      fix.css({
        position: "absolute",
        top: mainall - sideHeight,
        bottom: "",
        margin: 0,
      });
    } else if (winTop >= fixTop - 10) {
      //固定する時
      fix.css({
        position: "fixed",
        top: "10px",
        bottom: "auto",
        left: "auto",
      });
    } else {
      //固定前
      fix.css({
        position: "static",
      });
    }
  };

  w.on("scroll", adjust);
});
