let vm = new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  data: () => ({
    step: 1,
    valid:false,
    disable:false,
    show:true,
    name: '',
    code:'',
    newCode: '',
    nameRules: [
      v => !!v || '必须填写姓名',
      v => (v && v.length <= 20) || '',
    ],
    icons: [
      { name: 'mdi-facebook', link: "https://www.facebook.com/FYJBCO" },
      { name: 'mdi-instagram', link: "https://instagram.com/fyco___" },
      { name: 'mdi-youtube', link: "https://youtube.com/channel/UCvy6YASGASlqrF39hBnPwTg" }
    ],
  }),

  computed: {
    currentTitle() {
      switch (this.step) {
        case 1: return '获取你的电子票'
        case 2: return '填写名字'
        default: return '下载门票'
      }
    },

    currentNextBtn() {
      switch (this.step) {
        case 1: return '下一步'
        case 2: return '下一步'
        default: return ''
      }
    },

    currentBackBtn() {
      switch (this.step) {
        case 1: return ''
        case 2: return ''
        default: return ''
      }
    },

    size() {
      switch (this.$vuetify.breakpoint.name) {
        case 'xs': return 350
        case 'sm': return 600
        case 'md': return 900
        case 'lg': return 1300
        case 'xl': return 1300
      }
    },

    isNextDisabled() {
      switch (this.step) {
        case 1: return false
        case 2: if(!this.name || this.name.length >4){return true}else{return false}
        default: return true
      }
    },

    isBackDisabled() {
      switch (this.step) {
        case 1: return true //true
        case 2: return true //false
        default: return true //false
      }
    },          

  },

  methods: {

    validate() {
      this.$refs.form.validate()
    },
    reset() {
      this.$refs.form.reset()
    },
    resetValidation() {
      this.$refs.form.resetValidation()
    },


    check: function() {


      if (this.step == 2) {
      }
      if (this.step == 3) {
        this.show = false;

      }

    },


  }

})
