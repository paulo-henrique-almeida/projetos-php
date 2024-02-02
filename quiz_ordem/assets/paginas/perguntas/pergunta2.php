<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../imagens/favicon/energia.ico" type="image/x-icon">
        <title>Pergunta 2</title>
    </head>
    <body>

        <header>
            <h1>QUIZ ORDEM PARANORMAL</h1>
            <hr>
        </header>
        <form action="pergunta3.php" method="post">
            <h2>Pergunta 2</h2>

            <h3>Quem é o Sr. Veríssimo?</h3>

            <div class="alternativas">
                <label for="a">
                    <input type="radio" name="pergunta2" value="a" id="a" checked> Portador da relíquia de conhecimento
                    <span class="checkmark"></span>
                </label><br>
                <label for="b">
                    <input type="radio" name="pergunta2" value="b" id="b"> O primeiro ocultista
                    <span class="checkmark"></span>
                </label><br>
                <label for="c">
                    <input type="radio" name="pergunta2" value="c" id="c"> O chefe da Ordo Realitas
                    <span class="checkmark"></span>
                </label><br>
                <label for="d">
                    <input type="radio" name="pergunta2" value="d" id="d"> Um escripta
                    <span class="checkmark"></span>
                </label><br>
                <label for="e">
                    <input type="radio" name="pergunta2" value="e" id="e"> Um monstro paranormal
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="submit" id="btn" value="Responder">
        </form>

        <?php

            session_start();
            $_SESSION["pergunta1"] = $_POST["pergunta1"];

        ?>

    </body>
</html>