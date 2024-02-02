<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../imagens/favicon/energia.ico" type="image/x-icon">
        <title>Pergunta 5</title>
    </head>
    <body>

        <header>
            <h1>QUIZ ORDEM PARANORMAL</h1>
            <hr>
        </header>
        <form action="../resultado.php" method="post">
            <h2>Pergunta 5</h2>

            <h3>Quem é o portador da relíquia de energia?</h3>

            <div class="alternativas">
                <label for="a">
                    <input type="radio" name="pergunta5" value="a" id="a" checked> Senhor Veríssimo
                    <span class="checkmark"></span>
                </label><br>
                <label for="b">
                    <input type="radio" name="pergunta5" value="b" id="b"> Anfitrião
                    <span class="checkmark"></span>
                </label><br>
                <label for="c">
                    <input type="radio" name="pergunta5" value="c" id="c"> Magistrada
                    <span class="checkmark"></span>
                </label><br>
                <label for="d">
                    <input type="radio" name="pergunta5" value="d" id="d"> Deus da morte
                    <span class="checkmark"></span>
                </label><br>
                <label for="e">
                    <input type="radio" name="pergunta5" value="e" id="e"> Kian
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="submit" id="btn" value="Responder">
        </form>

        <?php

            session_start();
            $_SESSION["pergunta4"] = $_POST["pergunta4"];

        ?>

    </body>
</html>