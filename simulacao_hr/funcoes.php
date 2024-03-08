<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        function desenharLinha ($direcao, $tamanho, $simbolo) {
            if (!isset($tamanho) || $tamanho < 1) {
                $tamanho = 1;
            }
    
            if (!isset($simbolo)) {
                $simbolo = '_';
            }

            echo "<marquee direction='$direcao'";
            for ($i = 0; $i < $tamanho; $i++) {
                echo "$simbolo";
            }
            echo "</marquee>";
        }

    ?>
    
</body>
</html>