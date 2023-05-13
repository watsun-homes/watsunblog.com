$(function () {
  mw(".js-modal-open", ".js-modal", ".js-modal-close");
  mw(".js-modal-open2", ".js-modal2", ".js-modal-close2");
  mw(".js-modal-open3", ".js-modal3", ".js-modal-close3");
  mw(".js-modal-open4", ".js-modal4", ".js-modal-close4");
  mw(".js-modal-open5", ".js-modal5", ".js-modal-close5");
  mw(".js-modal-open6", ".js-modal6", ".js-modal-close6");
  mw(".js-modal-open7", ".js-modal7", ".js-modal-close7");
  mw(".js-modal-open8", ".js-modal8", ".js-modal-close8");
  mw(".js-modal-open9", ".js-modal9", ".js-modal-close9");
  mw(".js-modal-open10", ".js-modal10", ".js-modal-close10");
  mw(".js-modal-open11", ".js-modal11", ".js-modal-close11");
  mw(".js-modal-open12", ".js-modal12", ".js-modal-close12");
  mw(".js-modal-open13", ".js-modal13", ".js-modal-close13");
  mw(".js-modal-open14", ".js-modal14", ".js-modal-close14");
  mw(".js-modal-open15", ".js-modal15", ".js-modal-close15");
  mw(".js-modal-open16", ".js-modal16", ".js-modal-close16");
  mw(".js-modal-open17", ".js-modal17", ".js-modal-close17");
  mw(".js-modal-open18", ".js-modal18", ".js-modal-close18");
  mw(".js-modal-open19", ".js-modal19", ".js-modal-close19");
  mw(".js-modal-open20", ".js-modal20", ".js-modal-close20");
  mw(".js-modal-open21", ".js-modal21", ".js-modal-close21");
  mw(".js-modal-open22", ".js-modal22", ".js-modal-close22");
  mw(".js-modal-open23", ".js-modal23", ".js-modal-close23");
  mw(".js-modal-open24", ".js-modal24", ".js-modal-close24");
  mw(".js-modal-open25", ".js-modal25", ".js-modal-close25");
  mw(".js-modal-open26", ".js-modal26", ".js-modal-close26");
  mw(".js-modal-open27", ".js-modal27", ".js-modal-close27");
  mw(".js-modal-open28", ".js-modal28", ".js-modal-close28");
  mw(".js-modal-open29", ".js-modal29", ".js-modal-close29");
  mw(".js-modal-open30", ".js-modal30", ".js-modal-close30");
  mw(".js-modal-open31", ".js-modal31", ".js-modal-close31");
  mw(".js-modal-open32", ".js-modal32", ".js-modal-close32");
  mw(".js-modal-open33", ".js-modal33", ".js-modal-close33");
  mw(".js-modal-open34", ".js-modal34", ".js-modal-close34");

  //1~12,26~28,31~は制作実績/13~25,29~30はサービスページ
});

function mw(open, content, close) {
  $(open).on("click", function () {
    $(content).fadeIn();
    return false;
  });
  $(close).on("click", function () {
    $(content).fadeOut();
    return false;
  });
}

$(function () {
  $(window).scroll(function () {
    $(".fade_in").each(function () {
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();
      const element = $(this).offset().top;

      if (scrollTop > element - windowHeight + 50) {
        $(this).addClass("view");
      }
    });
  });
});
