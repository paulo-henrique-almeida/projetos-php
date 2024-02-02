<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
</head>
<style>
    body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 2em;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            font-size: 2em;
            border: 5px solid black;
            border-radius: 15px;
            padding: 2vh;
            height: 55vh;
            width: 55vw;
        }
        input {
            font-size: .7em;
            text-align: center;
        }
        #btn {
                font-weight: bold;
                margin-top: 5vh;
                border-radius: 15px;
                background-color: rgb(119, 18, 119);
                color: white;
                border: none;
                padding: 10px;
                width: 20vw;
                box-shadow: 6px 8px 10px rgba(0, 0, 0, 0.8);
                transition: all .5s ease;
           }
           #btn:hover {
                transform: scale(1.1);
           }
           #btn:active {
                transform: scale(.9);
           }
</style>
<body>
<h1>Valores</h1>

    <?php
        session_start();
        $forma = $_POST["forma"];
        $cor = $_POST["cor"];
        $_SESSION["cor"] = $cor;
        $_SESSION["forma"] = $forma;
        echo "<strong>";
        if ($forma == "ret") {
            echo "Digite os valores de base e altura do retângulo em metros";
        } else {
            echo "Digite os valores de base a altura do triângulo em metros";
        }
        echo "</strong>";
    ?>
    <form action="resultado.php" method="post">
    <strong>Base</strong>
    <input type="number" min="0" name="base">
    <strong>Altura</strong>
    <input type="number" min="0" name="altura">
    <input type="submit" id="btn" value="Calcular">
</form>
</body>
</html>