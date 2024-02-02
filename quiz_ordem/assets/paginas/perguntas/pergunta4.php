<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../imagens/favicon/energia.ico" type="image/x-icon">
        <title>Pergunta 4</title>
    </head>
    <body>

        <header>
            <h1>QUIZ ORDEM PARANORMAL</h1>
            <hr>
        </header>
        <form action="pergunta5.php" method="post">
            <h2>Pergunta 4</h2>

            <h3>Qual elemento oprime o conhecimento?</h3>

            <div class="alternativas">
                <label for="a">
                    <input type="radio" name="pergunta4" value="a" id="a" checked> Morte
                    <span class="checkmark"></span>
                </label><br>
                <label for="b">
                    <input type="radio" name="pergunta4" value="b" id="b"> Energia
                    <span class="checkmark"></span>
                </label><br>
                <label for="c">
                    <input type="radio" name="pergunta4" value="c" id="c"> Medo
                    <span class="checkmark"></span>
                </label><br>
                <label for="d">
                    <input type="radio" name="pergunta4" value="d" id="d"> Sangue
                    <span class="checkmark"></span>
                </label><br>
                <label for="e">
                    <input type="radio" name="pergunta4" value="e" id="e"> Nenhum dos anteriores
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="submit" id="btn" value="Responder">
        </form>

        <?php

            session_start();
            $_SESSION["pergunta3"] = $_POST["pergunta3"];

        ?>

    </body>
</html>