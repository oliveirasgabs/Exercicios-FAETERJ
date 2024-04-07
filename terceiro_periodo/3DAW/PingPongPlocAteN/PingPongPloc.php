<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PingPongPloc com Função</title>
  <link rel="stylesheet" type="text/css" href="style.css"/> 
</head>

<body>

  <?php

    $contador = filter_input(INPUT_GET, "contador", FILTER_SANITIZE_STRING);

    function pingPongPloc ($contador){

      if ($contador%3==0 && $contador%5== 0){
        return "<p class='sublinhado'>$contador ploc</p>";
      } elseif ($contador%5==0){
          return "<p class='italico'>$contador pong</p>";
      } elseif ($contador%3== 0){
          return "<p class='negrito'>$contador ping</p>";
      } else{
          return "<p>$contador ok</p>";
      }
    }

    for ($indice=1 ; $indice <= $contador; $indice++) {
     echo pingPongPloc($indice) ;
    }

  ?>
</body>

</html>