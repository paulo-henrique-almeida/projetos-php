<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="shortcut icon" href="../../imagens/favicon/energia.ico" type="image/x-icon">
        <title>Pergunta 3</title>
        <style>
            img {
                height: 300px;
                width: auto;
                border-radius: 15px;
                border: 2px solid white;
                box-shadow: 0px 0px 10px white;
                margin-bottom: 2vh;
            }
        </style>
    </head>
    <body>

        <header>
            <h1>QUIZ ORDEM PARANORMAL</h1>
            <hr>
        </header>
        <form action="pergunta4.php" method="post">
            <h2>Pergunta 3</h2>

            <h3>Quem é este personagem?</h3>
            <img src="../../imagens/personagem3.png" alt="personagem">

            <div class="alternativas">
                <label for="a">
                    <input type="radio" name="pergunta3" value="a" id="a" checked> Kaiser
                    <span class="checkmark"></span>
                </label><br>
                <label for="b">
                    <input type="radio" name="pergunta3" value="b" id="b"> Arthur Cervero
                    <span class="checkmark"></span>
                </label><br>
                <label for="c">
                    <input type="radio" name="pergunta3" value="c" id="c"> Thiago Fritz
                    <span class="checkmark"></span>
                </label><br>
                <label for="d">
                    <input type="radio" name="pergunta3" value="d" id="d"> Jyoui Jyouki
                    <span class="checkmark"></span>
                </label><br>
                <label for="e">
                    <input type="radio" name="pergunta3" value="e" id="e"> Joui Jouki
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="submit" id="btn" value="Responder">
        </form>

        <?php

            session_start();
            $_SESSION["pergunta2"] = $_POST["pergunta2"];
            
        ?>

    </body>
</html>