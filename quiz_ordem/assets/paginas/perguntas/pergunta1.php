<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../imagens/favicon/energia.ico" type="image/x-icon">
        <title>Pergunta 1</title>
    </head>
    <body>

        <header>
            <h1>QUIZ ORDEM PARANORMAL</h1>
            <hr>
        </header>
        <form action="pergunta2.php" method="post">
            <h2>Pergunta 1</h2>

            <h3>Quais são os elementos do paranormal?</h3>

            <div class="alternativas">
                <label for="a">
                    <input type="radio" name="pergunta1" value="a" id="a" checked> Conhecimento, energia, medo, morte e sangue
                    <span class="checkmark"></span>
                </label><br>
                <label for="b">
                    <input type="radio" name="pergunta1" value="b" id="b"> Água, ar, fogo e terra
                    <span class="checkmark"></span>
                </label><br>
                <label for="c">
                    <input type="radio" name="pergunta1" value="c" id="c"> Carbono, hidrogênio, fósforo, nitrogênio e oxigênio
                    <span class="checkmark"></span>
                </label><br>
                <label for="d">
                    <input type="radio" name="pergunta1" value="d" id="d"> Dragão, eletricidade, veneno, pisíquico e fantasma
                    <span class="checkmark"></span>
                </label><br>
                <label for="e">
                    <input type="radio" name="pergunta1" value="e" id="e"> Elemento primário, elemento secundário e elemento terciário
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="submit" id="btn" value="Responder">
        </form>

        <?php

            session_start();
            $_SESSION["nome"] = $_POST["nome"];

            if (isset($_SESSION["pergunta5"])) {
                unset($_SESSION["pergunta5"]);
            }

        ?>

    </body>
</html>