const App = new Vue({
    el: "app",
    data:{
        cards : []
    },
    created() {
        axios.get('http://localhost:80/lezione-2-php/php-snacks-b1/controller.php').then((result) => {
          this.cards = result.data.results;
          console.log(result);
        }).catch((error) => { console.log(error);});
    },
})