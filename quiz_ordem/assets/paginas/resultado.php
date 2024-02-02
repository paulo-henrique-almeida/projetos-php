<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="shortcut icon" href="../imagens/favicon/energia.ico" type="image/x-icon">
        <title>Resultado Quiz Ordem Paranormal</title>
    </head>
    <body>

        <header>
            <h1>QUIZ ORDEM PARANORMAL</h1>
            <hr>
        </header>

        <?php

            session_start();

            $nome = ucfirst($_SESSION["nome"]);
            $resposta1 = $_SESSION["pergunta1"];
            $resposta2 = $_SESSION["pergunta2"];
            $resposta3 = $_SESSION["pergunta3"];
            $resposta4 = $_SESSION["pergunta4"];
            
            if (!isset($_SESSION["pergunta5"])) {
                $_SESSION["pergunta5"] = $_POST["pergunta5"];
            }
            $resposta5 = $_SESSION["pergunta5"];

            $acertos = 0;
            if ($resposta1 == "a") {
                $acertos++;
            }
            if ($resposta2 == "c") {
                $acertos++;
            }
            if ($resposta3 == "e") {
                $acertos++;
            }
            if ($resposta4 == "d") {
                $acertos++;
            }
            if ($resposta5 == "b") {
                $acertos++;
            }

            $porcen = ($acertos / 5) * 100;

            echo "<h2>$nome, você acertou $acertos/5 questões!</h2>";
            echo "<h2>Aproveitamento de $porcen%!</h2><br><br>";

            if ($acertos == 0) {
                echo "<h2 class='medo'>O Medo é infinito.</h2>";
            } elseif ($acertos > 0 && $acertos < 3) {
                echo "<h2 class='energia'>O CAOS É INEVITÁVEL</h2><h2 class='energia'>HAH4HAH4HAH4HAH4HAH4HAH4HAH4HAH4HAH4HAH4HAH4HAH4HA</h2>";
            } elseif ($acertos < 5) {
                echo "<h2 class='sangue'>Tudo tem um fim e eu sou o começo.</h2>";
            } else {
                echo "<h2 class='conhecimento'>Saber tudo é perder tudo.</h2>";
            }

        ?>

        <div class="central">
            <a href="../../index.html" id="btn" class="link" style="margin-right: 10vw;">Voltar</a>
            <a href="gabarito.php" id="btn" class="link">Gabarito</a>
        </div>

    </body>
</html>