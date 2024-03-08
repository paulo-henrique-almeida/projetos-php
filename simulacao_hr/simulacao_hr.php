<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de hr</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-size: 1vw;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #673ab7;
            color: white;
            overflow: hidden;
        }

        marquee {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-shadow: 5px 5px 5px rgba(0, 0, 0, .323);
        }
    </style>
</head>
<body>

    <?php

        include_once('funcoes.php');

        $direcao = $_POST['direcao'];
        $simbolo = $_POST['simbolo'];
        $tamanho = $_POST['tamanho'];

        desenharLinha($direcao, $tamanho, $simbolo);

    ?>
    
</body>
</html>