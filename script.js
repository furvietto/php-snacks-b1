const App = new Vue({
    el: "#app",
    data:{
        cars:[],
        filter:[],
        search: ""
    },
    created() {
        axios.get('http://localhost:80/lezione-2-php/php-snacks-b1/controller.php').then((result) => {
          this.cars = result.data.results;
          this.filter = result.data.results;
        }).catch((error) => { console.log(error);});
    },
    methods: {
        findArray:function () {
            if (this.search == "") {
                this.cars = this.filter
            }else{
                this.cars = []
                this.filter.forEach(element => {
                    if (element.marca == this.search) {
                        this.cars.push(element)
                    }
                });
            }
        }
    },
  
})