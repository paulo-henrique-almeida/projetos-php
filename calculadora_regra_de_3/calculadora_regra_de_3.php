<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora Regra de 3</title>
</head>
<body>

    <form action="resultado.php" method="get" class="container">
        <h1>Calculadora de Regra de 3</h1>

        <select name="di">
            <option value="direta">Diretamente proporcional</option>
            <option value="inversa">Inversamente proporcional</option>
        </select>

        <div class="valores">
            <input type="number" name="v1" id="v1" required>
            <input type="number" name="v2" id="v2" required>
            <input type="number" name="v3" id="v3" required>
            <span class="x">X</span>
        </div>

        <div class="cor">
            <span> Cor: </span>
                <select name="cores" id="cores">
                    <option value="orange"> Laranja </option>
                    <option value="blue"> Azul </option>
                    <option value="green"> Verde </option>
                    <option value="red"> Vermelho </option>
                    <option value="purple"> Roxo </option>
                </select>
        </div>

        <input type="submit" value="Resultado" class="btn">

    </form>

</body>
</html>