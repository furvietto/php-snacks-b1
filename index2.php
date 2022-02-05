<?php 
include_once __DIR__ . "./db.php";

$auto = $auto_usate;

if (!empty($_GET["send"])) {
    $send = ($_GET["send"]);
    $auto = [];
    foreach ($auto_usate as $key => $car) {
       foreach ($car as $key => $accessories) {
           if ($accessories == $send) {
               $auto[] = $car;
           }
       }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
 <div>
     <form action="index2.php" method="get">
         <div class="search">
             <label for="search">cerca Marca o Colore</label>
             <input name="send" placeholder="inserisci..." type="text">
             <button>Invia</button>
         </div>
     </form>
     <ul class="container">
         <?php foreach ($auto as $key => $car) {
            ?>
            <li>
                <div class="img">
                    <img src="<?= $car["immagine"] ?>" alt="">
                </div>
                <?php foreach ($car as $key => $accessories) {
                    if ($key !== "immagine" && $accessories !== "null" && $key !== "id") {
                        ?>
                    <div><?=$key?> <?=$accessories ?></div>
                    <?php } ?>
                    <?php } ?>
            </li>
         <?php   
         } ?>
     </ul>
 </div>   
</body>
</html>