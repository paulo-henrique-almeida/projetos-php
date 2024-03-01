<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Resultado</title>
</head>

<body>

    <div class="container" id="resultado">

        <?php

        session_start();

        $pri = $_GET['pri'];
        $seg = $_GET['seg'];
        $ter = $_GET['ter'];

        $_SESSION['pri'] = $pri;
        $_SESSION['seg'] = $seg;
        $_SESSION['ter'] = $ter;

        if ($seg != 0 && is_numeric($pri) && is_numeric($seg) && is_numeric($ter)) {
            echo "<p><strong>Primeiro Valor:</strong> $pri</p>";
            echo "<p><strong>Segundo Valor:</strong> $seg</p>";
            echo "<p><strong>Terceiro Valor:</strong> $ter</p> <br>";

            $resultado = ($pri * $seg + $ter) / $seg;
            echo "<p><strong>Resultado:</strong> $resultado</p>";

            $anterior = $resultado - 1;
            $sucessor = $resultado + 1;

            echo "<p><strong>Anterior:</strong> $anterior</p>";
            echo "<p><strong>Sucessor:</strong> $sucessor</p>";
        } else {
            echo "<h1 class='erro'>Erro ao realizar o cálculo</h1>";
        }

        ?>

        <button class="btn" id="btn-proximo">Próximo</button>

    </div>

    <form action="nome.php" method="post" class="container esconder" id="formulario" style="width: 100%;">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="sobrenome" placeholder="Sobrenome" required>
        <input type="text" name="simbolo" maxlength="1" placeholder="Simbolo" required>
        <div class="botoes">
            <input type="submit" class="btn">
            <button class="btn" id="btn-voltar">Voltar</button>
        </div>
    </form>


    <script>
        const btnProximo = document.getElementById('btn-proximo');
        const resultado = document.getElementById('resultado');
        const formulario = document.getElementById('formulario');
        const btnVoltar = document.getElementById('btn-voltar');

        btnProximo.addEventListener('click', () => {
            resultado.classList.add('esconder');
            formulario.classList.remove('esconder');
        });

        btnVoltar.addEventListener('click', () => {
            resultado.classList.remove('esconder');
            formulario.classList.add('esconder');
        });
    </script>

</body>

</html>