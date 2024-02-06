<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Valores</title>
</head>

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