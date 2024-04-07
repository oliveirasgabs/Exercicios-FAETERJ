<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplos de 5 entre 1 e 100</title>
</head>
<body>
<?php
            for ($contador=1 ; $contador <=100; $contador++){
                if ($contador%5== 0){
                    echo "<p>$contador</p>";
                }
            }
        ?>
</body>
</html>