//vue.js
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
  //true,falseの切り替え
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

//----------------------------プルダウン↓-------------------------------------
new Vue({
  el: "#main_menu",
  data: {
    truefalse: false,
    hoverIndex: null,
  },
  methods: {
    mouseOverAction: function (index) {
      this.truefalse = true;
      this.hoverIndex = index;
    },
    mouseLeaveAction: function () {
      this.truefalse = false;
    },
  },
});
