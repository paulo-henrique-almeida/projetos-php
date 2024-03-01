<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Nome e Sobrenome</title>
</head>
<body>

    <div class="container" id="nome">

        <?php

            session_start();

            $pri = $_SESSION['pri'];
            $seg = $_SESSION['seg'];
            $ter = $_SESSION['ter'];

            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $simbolo = $_POST['simbolo'];

            echo "<p><strong>Primeiro valor:</strong> $pri</p>";
            echo "<p><strong>Segundo Valor:</strong> $seg</p>";
            echo "<p><strong>Terceiro valor:</strong> $ter</p>";
            
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Sobrenome:</strong> $sobrenome</p>";
            echo "<p><strong>Nome completo:</strong> $nome $sobrenome</p>";
            echo "<p><strong>Simbolo:</strong> $simbolo</p>";

            if ($seg >= $pri  && $seg<= $ter) {
                echo "$seg está entre $pri e $ter";
            }
            else {
                echo "$seg não está entre $pri e $ter";
            }

            echo "<button class='btn' id='btn-numeros-entre'>Números entre $pri e $seg</button>";
        ?>

    </div>

    <div class="container esconder" id="numeros-entre">

        <?php

            echo "<h2>Números entre $pri e $seg</h2>";

            $inicio = $pri;
            $fim = $seg;
            $cont = 0;

            if ($inicio > $fim) {
                $inicio = $seg;
                $fim = $pri;
            }

            if (!($fim <= $inicio + 1)) {
                for ($i = $inicio + 1; $i < $fim; $i++) {
                    if ($i % $ter == 0) {
                        echo "$simbolo ";
                        $cont++;
                    } else {
                        echo "$i ";
                    }
                }
            } else {
                echo "Não há números entre $pri e $seg";
            }

            echo "<p>o símbolo $simbolo apareceu $cont vezes</p>";
        ?>

        <button class="btn" id="btn-voltar">Voltar</button>
    </div>

    <script>

        const btnNumerosEntre = document.getElementById('btn-numeros-entre');
        const nome = document.getElementById('nome');
        const numerosEntre = document.getElementById('numeros-entre');
        const btnVoltar = document.getElementById('btn-voltar');

        btnNumerosEntre.addEventListener('click', () => {
            nome.classList.add('esconder');
            numerosEntre.classList.remove('esconder');
        });

        btnVoltar.addEventListener('click', () => {
            nome.classList.remove('esconder');
            numerosEntre.classList.add('esconder');
        });

    </script>

</body>
</html>