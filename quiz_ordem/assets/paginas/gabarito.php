<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imagens/favicon/energia.ico" type="image/x-icon">
    <title>Gabarito Quiz Ordem Paranormal</title>
</head>

<body>

    <header>
        <h1>QUIZ ORDEM PARANORMAL</h1>
        <hr>
    </header>

    <div class="form">
        <div class="central" style="flex-direction: column;">
            <?php

            session_start();
            $resposta1 = $_SESSION["pergunta1"];
            $resposta2 = $_SESSION["pergunta2"];
            $resposta3 = $_SESSION["pergunta3"];
            $resposta4 = $_SESSION["pergunta4"];
            $resposta5 = $_SESSION["pergunta5"];

            if ($resposta1 == "a") {
                echo "<h3 class='certa'>";
            } else {
                echo "<h3 class='errada'>";
            }
            echo "1. A";

            if ($resposta2 == "c") {
                echo "<h3 class='certa'>";
            } else {
                echo "<h3 class='errada'>";
            }
            echo "2. C";

            if ($resposta3 == "e") {
                echo "<h3 class='certa'>";
            } else {
                echo "<h3 class='errada'>";
            }
            echo "3. E";

            if ($resposta4 == "d") {
                echo "<h3 class='certa'>";
            } else {
                echo "<h3 class='errada'>";
            }
            echo "4. D";

            if ($resposta5 == "b") {
                echo "<h3 class='certa'>";
            } else {
                echo "<h3 class='errada'>";
            }
            echo "5. B";

            ?>
        </div>

        <a href="resultado.php" id="btn" class="link">Voltar</a>
    </div>

</body>

</html>