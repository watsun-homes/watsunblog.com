//----------------------------文字アニメーション↓------------------------------
$(".end-right").css("left", "-10%");
$(".end-left").css("left", "110%");
$(".end-right").velocity(
  {
    left: "55%",
  },
  "easeOutExpo",
  1200
);
$(".end-left").velocity(
  {
    left: "52%",
  },
  "easeOutExpo",
  1200
);
setTimeout(function () {
  $(".glow").velocity(
    {
      opacity: 1,
    },
    1200
  );
}, 1200);

//----------------------------計算↓------------------------------
function keisan() {
  // 商品1
  var price1 = document.form1.goods1.selectedIndex * 500; // 単価を設定
  document.form1.field1.value = price1; // 小計を表示

  // 商品2
  var price2 = document.form1.goods2.selectedIndex * 1000; // 単価を設定
  document.form1.field2.value = price2; // 小計を表示

  // 商品3
  var price3 = document.form1.goods3.selectedIndex * 3000; // 単価を設定
  document.form1.field3.value = price3; // 小計を表示

  // 合計を計算
  var total = price1 + price2 + price3;

  document.form1.field_total.value = total; // 合計を表示
}

//----------------------------時計↓------------------------------
function getElements() {
  const time = new Date();
  const hour = time.getHours();
  const minute = time.getMinutes();
  const second = time.getSeconds();

  const degreeHour = (hour / 12) * 360;
  const degreeMin = (minute / 60) * 360;
  const degreeSec = (second / 60) * 360;

  const clockHour = document.getElementsByClassName("clock-hour")[0];
  const clockMin = document.getElementsByClassName("clock-min")[0];
  const clockSec = document.getElementsByClassName("clock-sec")[0];

  clockHour.style.setProperty("transform", `rotate(${degreeHour}deg)`);
  clockMin.style.setProperty("transform", `rotate(${degreeMin}deg)`);
  clockSec.style.setProperty("transform", `rotate(${degreeSec}deg)`);
}
setInterval(getElements, 1000);

$(function () {
  //----------------------------ハンバーガーメニュー↓------------------------------
  $(".menu_btn").click(function () {
    $(".menu_btn").toggleClass("add");
    $(".header-box nav").toggleClass("add");
  });
  $("#main").click(function () {
    $(".menu_btn").removeClass("add");
    $(".header-box nav").removeClass("add");
  });

  //----------------------------ホバーダウン↓------------------------------
  $("#main_menu .main_list")
    .mouseover(function () {
      $("#sub_menu", this).stop().slideToggle();
    })
    .mouseout(function () {
      $("#sub_menu", this).stop().slideToggle();
    });

  //----------------------------スクロール固定↓------------------------------
  $(window).scroll(function () {
    const scroll_btn = $(window).scrollTop();
    const Element_btn = $("#animation").height();

    if (scroll_btn > Element_btn + 50) {
      $(".menu_btn").addClass("scroll");
    } else if (scroll_btn < Element_btn + 50) {
      $(".menu_btn").removeClass("scroll");
      if ($(window).width() > 768) {
        $(".menu_btn").removeClass("add");
        $(".header-box nav").removeClass("add");
      }
    }
  });

  //----------------------------ポップアップ↓------------------------------
  var popup = document.getElementById("js-popup");
  if (!popup) return;
  popup.classList.add("is-show");

  var blackBg = document.getElementById("js-black-bg");
  var closeBtn = document.getElementById("js-close-btn");

  function closePopup(elem) {
    if (!elem) return;
    elem.addEventListener("click", function () {
      popup.classList.remove("is-show");
    });
  }
  closePopup(blackBg);
  closePopup(closeBtn);

  //---------------------------フェードイン↓------------------------------
  $(window).scroll(function () {
    $(".fade-in").each(function () {
      const scroll = $(window).scrollTop();
      const Element = $(this).offset().top;
      const windowHeight = $(window).height();

      if (scroll > Element - windowHeight + 50) {
        $(this).addClass("view");
      }
    });
  });

  //----------------------------タブ↓------------------------------
  const tabItem = document.querySelectorAll(".tab-item");
  const tabContent = document.querySelectorAll(".tab-content");

  for (var i = 0; i < tabItem.length; i++) {
    tabItem[i].addEventListener("click", tabToggle);
  }

  function tabToggle() {
    for (let i = 0; i < tabItem.length; i++) {
      tabItem[i].classList.remove("active");
    }
    for (let i = 0; i < tabContent.length; i++) {
      tabContent[i].classList.remove("active");
    }

    this.classList.add("active");

    const aryTabs = Array.prototype.slice.call(tabItem);
    const index = aryTabs.indexOf(this);

    tabContent[index].classList.add("active");
  }

  //----------------------------グラフ↓------------------------------
  google.charts.load("current", {
    packages: ["corechart"],
  });
  google.charts.setOnLoadCallback(myChart);
  google.charts.setOnLoadCallback(myChart_2);

  function myChart() {
    var data = google.visualization.arrayToDataTable([
      ["言語", "種類"],
      ["HTML", 30],
      ["CSS", 30],
      ["Javascript", 25],
      ["PHP", 15],
    ]);

    var options = {
      title: "使用言語（円グラフ）",
      backgroundColor: {
        fill: "#C1C7C4",
        stroke: "#C1C7C4",
        strokeWidth: 1,
      },
      slices: {
        0: {
          color: "darkRed",
        },
        1: {
          color: "orange",
        },
        2: {
          color: "pink",
        },
        3: {
          color: "lime",
        },
        4: {
          color: "blue",
        },
        5: {
          color: "red",
        },
        6: {
          color: "gray",
        },
      },
    };

    var chart = new google.visualization.PieChart(
      document.getElementById("mychart")
    );
    chart.draw(data, options);
  }

  function myChart_2() {
    var data = google.visualization.arrayToDataTable([
      ["言語", "種類"],
      ["HTML", 30],
      ["CSS", 30],
      ["Javascript", 25],
      ["PHP", 15],
    ]);

    var options = {
      title: "使用言語（棒グラフ）",
      backgroundColor: {
        fill: "#C1C7C4",
        stroke: "#C1C7C4",
        strokeWidth: 3,
      },
      slices: {
        0: {
          color: "darkRed",
        },
        1: {
          color: "orange",
        },
        2: {
          color: "pink",
        },
        3: {
          color: "lime",
        },
        4: {
          color: "blue",
        },
        5: {
          color: "red",
        },
        6: {
          color: "gray",
        },
      },
    };

    var chart = new google.visualization.ColumnChart(
      document.getElementById("mychart_2")
    );
    chart.draw(data, options);
  }

  //----------------------------スライダー↓------------------------------
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    breakpoints: {
      440: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },

    autoplay: {
      delay: 3000,
      stopOnLastSlide: false,
      disableOnInteraction: false,
      reverseDirection: false,
    },

    navigation: {
      nextEl: ".swiper-button-next",

      prevEl: ".swiper-button-prev",
    },

    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });

  //----------------------------プルダウン↓------------------------------
  $("#pulldown .pull_box").click(function () {
    $(".pull_txt", this).slideToggle();
  });

  //----------------------------モーダルリンク↓------------------------------
  $(function () {
    mw(".js-modal-open", ".js-modal", ".js-modal-close");
    mw(".js-modal-open2", ".js-modal2", ".js-modal-close2");
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

  //----------------------------ajax↓------------------------------

  //テキスト変更
  $(".sample_btn").click(function () {
    $.ajax({
      url: "https://watsunblog.com/wp-content/themes/watsunblog.com/js/ajax.html",
      type: "GET",
      dataType: "html",
    })
      .done(function (data) {
        $(".henkou").html(data);
      })
      .fail(function (data) {
        alert("通信失敗！");
      });
  });

  //3の倍数か
  $(".hantei_btn").click(function () {
    $.ajax({
      url: "https://watsunblog.com/wp-content/themes/watsunblog.com/js/ajax.php",
      type: "GET",
      dataType: "text",
      data: {
        no: $(".input_number").val(),
      },
    })
      .done(function (data) {
        $(".hantei").text(data);
      })
      .fail(function (data) {
        alert("通信失敗！");
      });
  });

  //データベース連携識別
  $(".sikibetu_btn").click(function () {
    $.ajax({
      url: "https://watsunblog.com/wp-content/themes/watsunblog.com/js/ajax_db.php",
      type: "GET",
      dataType: "json",
      data: {
        gender: $('[name="gender"]').val(),
        type: $('[name="type"]').val(),
      },
    })
      .done(function (data) {
        var html_response = "<ul>";

        $.each(data, function (key, value) {
          html_response += "<li>" + value + "</li>";
        });

        html_response += "</ul>";
        $(".sikibetu").html(html_response);
      })
      .fail(function (data) {
        alert("通信失敗！");
      });
  });
});

//----------------------------vue ↓------------------------------
const URL_API = "https://api.zipaddress.net/";

const vm = new Vue({
  el: "#demo", //対象要素を取得
  data: {
    inputZip: "", //入力された値
    defaultZip: "半角数字で入力", //デフォルトでの値
    results: "", //検索結果の値。最初は空
  },
  computed: {
    computedZip: function () {
      return !isNaN(this.inputZip) && this.inputZip.length == 7
        ? this.inputZip
        : this.defaultZip;
    },
  },
  methods: {
    getAddress: function (z) {
      //zにはcomputedZipが入る
      let params = {
        params: {
          zipcode: z,
        },
      };
      axios.get(URL_API, params).then((res) => {
        //resにはaxiousで返されたオブジェクトが入る
        this.results =
          res.data.code == 200 ? res.data.data.fullAddress : res.data.message;
      });
    },
  },
});
