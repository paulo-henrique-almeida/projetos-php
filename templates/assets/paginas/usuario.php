<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>
        <?php
        $titulo = $_POST['titulo'];
        echo $titulo != '' ? $titulo : "Novo documento";
        ?>
    </title>
    <style>
        :root {
            <?php
            $corFundo = $_POST['cor-fundo'];
            $corTexto = $_POST['cor-texto'];

            echo "--cor-fundo: ";
            echo $corFundo != '' ? $corFundo : "#2140de";
            echo ";";

            echo "--cor-texto: ";
            if ($corTexto != '') {
                echo $corTexto;
            } else {
                if ($corFundo == 'white') {
                    echo "#101010";
                } else {
                    echo "white";
                }
            }
            echo ";";
            ?>
        }

        body {
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
        }
    </style>
</head>

<body>


    <?php

    $nome = $_POST['nome'];
    $conteudo = $_POST['conteudo'];
    $arena = $_POST['arena'];

    echo $conteudo;
    echo $arena != '' ? "<img src='../imagens/$arena.png'>" : '';

    echo "<p>Feito por: ";
    echo $nome != '' ? $nome : "Anônimo";
    echo "</p>";

    ?>

</body>

</html>