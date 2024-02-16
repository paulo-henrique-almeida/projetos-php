<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
    <style>
        :root {
            --cor: 
            <?php
                $cor = $_GET['cores'];
                echo $cor;
             ?>;
        }

        .container {
            border-color: var(--cor);
        }

        .resultado {
            background-color: var(--cor);
        }

        .btn {
            background-color: var(--cor);
        }

    </style>
</head>
<body>
    
    <div class="container">
       <h1>Calculadora de Regra de 3</h1>
        <div class="valores">
            <?php

                $v1 = $_GET['v1'];
                $v2 = $_GET['v2'];
                $v3 = $_GET['v3'];
                $di = $_GET['di'];

                if ($di == "direta") {
                    $x = ($v2 * $v3) / $v1;
                } else {
                    $x = ($v2 * $v1) / $v3;
                }

                echo "<span>$v1</span>";
                echo "<span>$v2</span>";
                echo "<span>$v3</span>";
                echo "<span>$x</span>";
                echo "</div>";

                echo "<span class='resultado'> X = $x </span>";

               

            ?>
        <button class="btn"> <a href="calculadora_regra_de_3.php"> Voltar </a></button>
    </div>

</body>
</html>