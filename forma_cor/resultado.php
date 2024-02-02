<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2em;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        img {
            height: 500px;
            width: auto;
            margin-top: 5vh;
        }
    </style>
</head>
<body>
    <h1>Resultado</h1>
    <?php
        session_start();
        $cor = $_SESSION["cor"];
        $forma = $_SESSION["forma"];
        $b = $_POST["base"];
        $h = $_POST["altura"];

        if ($forma == "ret") {
            $area = $b * $h;
            echo "A área do retângulo é: " . $area . " metros";
        } else {
            $area = ($b * $h) / 2;
            echo "A área do triângulo é: " . $area . " metros";
        }

        if ($forma == "ret" && $cor == "azul") {
            echo "<img src='imagens/retangulo/azul.png'>";
        } else {
            if ($forma == "ret" && $cor == "verde") {
                echo "<img src='imagens/retangulo/verde.png'>";
            } else {
                if ($forma == "ret" && $cor == "vermelho") {
                    echo "<img src='imagens/retangulo/vermelho.png'>";
            } else {
                if ($forma == "tri" && $cor == "vermelho") {
                    echo "<img src='imagens/triangulo/vermelho.png'>";
                } else {
                    if ($forma == "tri" && $cor == "azul") {
                        echo "<img src='imagens/triangulo/azul.png'>";
                    } else {
                        echo "<img src='imagens/triangulo/verde.png'>";
                    }
                }
            }
        }
    }
    ?>
</body>
</html>