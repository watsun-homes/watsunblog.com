//vue.js

//-------------------------モーダル↓----------------------------------------
Vue.component("open-modal", {
  template: `
    <div id="overlay" v-on:click="clickEvent">
        <div id="content" v-on:click="stopEvent">
          <p><slot></slot></p>
          <button v-on:click="clickEvent">close</button>
        </div>
    </div>
    `,
  methods: {
    clickEvent: function () {
      //このコンポーネント内で指定の要素をクリックしたら、親コンポーネントに伝えることができるイベント
      this.$emit("from-child");
    },
    stopEvent: function () {
      //親要素のイベント伝播を阻止。clickEventを効かせない
      event.stopPropagation();
    },
  },
});

new Vue({
  el: "#app",
  data: {
    showContent: false,
  },
  methods: {
    openModal: function () {
      this.showContent = true;
    },
    closeModal: function () {
      this.showContent = false;
    },
  },
});

//----------------------------ホバーダウン↓----------------
//----------------------------固定表示↓-------------------
//----------------------------ハンバーガーメニュー↓---------
Vue.component("open-box", {
  template: `
        <div id="nav_box" v-on:click="clickEvent">
          <div id="content" v-on:click="stopEvent">
            <slot></slot>
            <div id="close_btn" v-on:click="clickEvent"></div>
          </div>
        </div>
    `,
  methods: {
    clickEvent: function () {
      this.$emit("via");
    },
    stopEvent: function () {
      event.stopPropagation();
    },
  },
});

var hamberg = new Vue({
  el: "#ham_menu",
  data: {
    active: "",
    items: [
      {
        url: "#",
        name: "ページ１",
      },
      {
        url: "#",
        name: "ページ2",
        children: [
          {
            url: "#1",
            name: "サブページ１",
          },
          {
            url: "#2",
            name: "サブページ2",
          },
        ],
      },
      {
        url: "#",
        name: "ページ3",
        children: [
          {
            url: "#1",
            name: "サブページ3",
          },
        ],
      },
    ],
    fix: false,
    open: false,
  },
  created: function () {
    window.addEventListener("scroll", this.ScrollFixed);
  },
  destroyed: function () {
    window.removeEventListener("scroll", this.ScrollFixed);
  },
  methods: {
    ScrollFixed: function () {
      var scroll_length = window.scrollY;
      if (scroll_length > 550) {
        this.fix = true;
      } else {
        this.fix = false;
      }
    },
    openMenu: function () {
      this.open = true;
    },
    closeModal: function () {
      this.open = false;
    },
    dropdown(item) {
      this.active = this.active === item ? "" : item;
    },
  },
});

//----------------------------フェードイン↓------------------------------
Vue.component("FadeInComponent", {
  template: `
    <div :class="{fadeIn:visible}">
      <slot v-show="visible"></slot>
    </div>
  `,
  data() {
    return {
      visible: false,
    };
  },
  created: function () {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed: function () {
    window.removeEventListener("scroll", this.handleScroll);
  },
  methods: {
    handleScroll: function () {
      var element = this.$el.getBoundingClientRect().top;
      if (element < window.innerHeight + 0) {
        this.visible = true;
      } else {
        this.visible = false;
      }
    },
  },
});
var fade = new Vue({
  el: "#fadein",
});

//----------------------------タブ↓------------------------------
const tab = new Vue({
  el: "#tab",
  data: {
    show: "1",
  },
  methods: {
    select: function (num) {
      this.show = num;
    },
  },
});

//----------------------------スライダー↓------------------------------
Vue.use(VueAwesomeSwiper);
var slider = new Vue({
  el: "#slider",
  data: {
    swiperOptions: {
      loop: true,
      slidesPerView: 3,
      spaceBetween: 20,
      autoplay: {
        delay: 5000,
      },
      speed: 500,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        440: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        0: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      },
    },
  },
});

//----------------------------検索↓------------------------------
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

//----------------------------プルダウン↓-------------------------------------
var pulldown = new Vue({
  el: "#pulldown",
  data: {
    active: "",
    lists: [
      {
        tit: "タイトル1",
        txt: "テキスト1",
      },
      {
        tit: "タイトル2",
        txt: "テキスト2",
      },
      {
        tit: "タイトル3",
        txt: "テキスト3",
      },
    ],
  },
  methods: {
    pulldown(list) {
      this.active = this.active === list ? "" : list;
    },
  },
});
