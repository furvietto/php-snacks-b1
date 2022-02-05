<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
 <div id="app">
     <div class="search">
         <label for="search">cerca Marca o Colore</label>
         <input placeholder="inserisci..." @keyup.enter="findArray" v-model="search" type="text">
     </div>
     <ul class="container">
         <li v-for="(car,index) in cars" :key="index">
             <div class="img">
                 <img :src="car.immagine" alt="">
             </div>
             <div>
                 Marca: {{car.marca}}
             </div>
             <div>
                 Carburante: {{car.carburante}}
             </div>
             <div>
                 Modello: {{car.modello}}
             </div>
             <div>
                 Anno: {{car.anno}}
             </div>
             <div>
                 Cilindrata: {{car.cilindrata}}
             </div>
             <div>
                 Trasmissione: {{car.trasmissione}}
             </div>
             <div>
                 Km: {{car.km}}
             </div>
             <div>
                 Colore: {{car.colore}}
             </div>
             <div>
                 Prezzo: {{car.prezzo}}
             </div>
             <div>
                 Accessori: {{car.accessori != "null" ? car.accessori : "risultato non disponibile" }}
             </div>
             <div>
                 Numero Porte: {{car.nPorte}}
             </div>
             <div>
                 Località: {{car.localita}}
             </div>
             <div>
                 trazione: {{car.trazione != "null" ? car.trazione : "risultato non disponibile"}}
             </div>
             <div>
                 Targa: {{car.targa != "null" ? car.targa : "risultato non disponibile"}}
             </div>
         </li>
     </ul>
 </div>   
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="script.js"></script>
</body>
</html>