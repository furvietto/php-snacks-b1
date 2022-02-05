const App = new Vue({
    el: "#app",
    data:{
        cars:[],
        search: ""
    },
    created() {
        axios.get('http://localhost:80/lezione-2-php/php-snacks-b1/controller.php').then((result) => {
          this.cars = result.data.results;
          console.log(result);
        }).catch((error) => { console.log(error);});
    },
    methods: {
        findArray:function () {
            console.log("ciao");
        }
    },
  
})