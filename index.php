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
     <label for="search">cerca</label>
     <input @keyup.enter="findArray" v-model="search" id="search" type="text">
     <ul class="container">
         <li v-for="(car) in cars" :key="index">
             <img :src="car.immagine" alt="">
             <div v-for="(accessories) in car" :key="index">
                 {{accessories}}
             </div>
         </li>
     </ul>
 </div>   
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="script.js"></script>
</body>
</html>