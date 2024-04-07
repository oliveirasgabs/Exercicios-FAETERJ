<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PingPongPloc</title>
    <link rel="stylesheet" type="text/css" href="style.css"/> 
</head>
<body>
    <?php
        for ($contador=1 ; $contador <=100; $contador++) {
            if ($contador%3==0 && $contador%5== 0){
                echo "<p class='sublinhado'>$contador ploc</p>";
            } elseif ($contador%5==0){
                echo "<p class='italico'>$contador pong</p>";
            } elseif ($contador%3== 0){
                echo "<p class='negrito'>$contador ping</p>";
            } else{
                echo "<p>$contador ok</p>";
            }
        }
    ?>
</body>
</html>