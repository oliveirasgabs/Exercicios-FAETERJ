<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola Mundo, aqui é a Gaby</title>
</head>
<body>
    <p>Olá Mundo! Aqui é a Gaby e abaixo terá a hora e dia atual:</p>
    <p>
        <?php
            $agora = date('d/m/Y H:i');
            echo $agora;
        ?>
    </p>
</body>
</html>