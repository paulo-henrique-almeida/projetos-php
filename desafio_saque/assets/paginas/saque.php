<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor do Saque</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imagens/favicon/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <h1>Banco PP</h1>
    </header>

    <strong>Você receberá:</strong><br>

    <?php

    $valor = $_POST["valor"];

    $cem = 0;
    $cinquenta = 0;
    $vinte = 0;
    $dez = 0;
    $cinco = 0;
    $dois = 0;
    $um = 0;

    while ($valor >= 100) {
        $valor = $valor - 100;
        $cem++;
    }
    while ($valor >= 50) {
        $valor = $valor - 50;
        $cinquenta++;
    }
    while ($valor >= 20) {
        $valor = $valor - 20;
        $vinte++;
    }
    while ($valor >= 10) {
        $valor = $valor - 10;
        $dez++;
    }
    while ($valor >= 5) {
        $valor = $valor - 5;
        $cinco++;
    }
    while ($valor >= 2) {
        $valor = $valor - 2;
        $dois++;
    }
    while ($valor >= 1) {
        $valor = $valor - 1;
        $um++;
    }

    if ($cem > 0) {
        if ($cem > 1) {
            echo "$cem notas de R$100";
        } else {
            echo "$cem nota de R$100";
        }
        echo "<br><br>";
    }
    if ($cinquenta > 0) {
        if ($cinquenta > 1) {
            echo "$cinquenta notas de R$50";
        } else {
            echo "$cinquenta nota de R$50";
        }
        echo "<br><br>";
    }
    if ($vinte > 0) {
        if ($vinte > 1) {
            echo "$vinte notas de R$20";
        } else {
            echo "$vinte nota de R$20";
        }
        echo "<br><br>";
    }
    if ($dez > 0) {
        if ($dez > 1) {
            echo "$dez notas de R$10";
        } else {
            echo "$dez nota de R$10";
        }
        echo "<br><br>";
    }
    if ($cinco > 0) {
        if ($cinco > 1) {
            echo "$cinco notas de R$5";
        } else {
            echo "$cinco nota de R$5";
        }
        echo "<br><br>";
    }
    if ($dois > 0) {
        if ($dois > 1) {
            echo "$dois notas de R$2";
        } else {
            echo "$dois nota de R$2";
        }
        echo "<br><br>";
    }
    if ($um > 0) {
        if ($um > 1) {
            echo "$um notas de R$1";
        } else {
            echo "$um nota de R$1";
        }
        echo "<br><br>";
    }

    ?>

</body>

</html>