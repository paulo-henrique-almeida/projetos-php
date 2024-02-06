<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultado</title>
    <style>
        body {
            font-size: 2em;
        }
    </style>
</head>

<body>
    <h1>Resultado</h1>
    <?php
    $v1 = $_POST['v1'];
    $v2 = $_POST['v2'];
    $v3 = $_POST['v3'];

    if ($v1 + $v2 <= $v3 || $v1 + $v3 <= $v2 || $v2 + $v3 < $v1 || $v1 == 0 || $v2 == 0 || $v3 == 0) {
        echo "Os valores não correspondem a um triângulo válido!";
        echo "<img src='imagens/x.png'>";
    } else {
        if ($v1 == $v2 && $v2 == $v3) {
            echo "O triângulo é equilátero.";
            echo "<img src='../imagens/equilatero.png'>";
        } else {
            if ($v1 <> $v2 && $v2 <> $v3) {
                echo "O triângulo é escaleno.";
                echo "<img src='../imagens/escaleno.png'>";
            } else {
                echo "O triângulo é isósceles.";
                echo "<img src='../imagens/isosceles.png'>";
            }
        }
    }
    ?>
</body>

</html>