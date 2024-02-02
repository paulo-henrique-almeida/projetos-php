<!DOCTYPE html>
<html lang="pt-br">
<!--mostra ao navegador que se trata de um arquivo html em português brasileiro-->
<head>
<!--abre a parte de cabeçalho da página-->
    <meta charset="UTF-8">
    <!--tag meta que faz a página aceitar caracteres dentro do UTF-8-->
    <title>Convocação Futebol Olímpico Masculino</title>
    <!--tag title que dá título à página-->
    <style>
    /*abre a tag style, que permite estilizar a página*/
        body {
            background-color: darkcyan;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Arial;
            font-size: 1.5em;
        }
        /*faz o body ter ciano escuro como cor de fundo, cor do texto branco, centralizar o conteúdo horizontalmente e verticalmente, organizando como coluna, definir a fonte como Arial, tamanho 1.5em*/
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 70vw;
            height: 70vh;
            border: white solid 5px;
            border-radius: 15px;
            font-size: 1.5em;
            padding: 2vh;
        }
        /*faz a tag form centralizar o conteúdo horizontalmente e verticalmente, organizando como coluna, ocupando 70% da altura e largura da tela, com uma borda branca de 5 pixels, 15 pixels de arredondamento, tamanho da fonte de 1.5em e um espaço correspondente a 2% da altura da tela entre a borda e o conteúdo*/
        input, select {
            font-family: Arial;
            text-align: center;
            margin-bottom: 2vh;  
            font-size: .6em;
        }
        /*estiliza os inputs e select para ter a fonte como arial, texto alinhado ao centro, com margem para baixo igual a 2% da altura da tela e tamanho da fonte igual a 0.6em*/
        #btn {
            border-radius: 15px;
            background-color: rgb(32, 130, 241);
            color: white;
            border: none;
            padding: 10px;
            width: 20vw;
            margin-top: 2vh;
            font-weight: bold;
            font-size: 1em;
        }
        /*id para o botão submit que o deixa com uma cor azul, arredondado em 15 pixels, cor do texto branco, sem borda, espaçamento de 10 pixels entre a borda e o texto, largura igual a 20% da tela, margem para cima igual a 2% da altura da tela, fonte em negrito com tamanho igual a 1em*/
        img {
            height: 15vh;
            width: auto;
        }
        /*deixa a imagem com 15% da altura da tela e o comprimento automático*/
    </style>
</head>
<body>
    <!--abre o corpo da página-->
    <img src="imagens/olimpiadas-logo">
    <!--tag img com a logo das olimpiadas-->
    <h1>Convocação Futebol Olímpico Masculino</h1>
    <!--tag h1 como título-->
    <form action="olimpiadas.php" method="post">
    <!--abre a tag form que redireciona para o arquivo olimpiadas.php com o método post, para que seja possível se obter os dados coletados no formulário em outra página-->
        <strong>Nome</strong>
        <!--tag strong para deixar em negrito-->
        <input type="text" name="nome" required>
        <!--tag input com type = text que permite escrever o seu nome e armazená-lo-->
        <strong>Clube</strong>
        <input type="text" name="clube">
        <!--armazena o nome do clube-->
        <strong>Ano de nascimento</strong>
        <?php
        //abre a parte de php, que será usada para se obter o ano atual
            $datatual = date('Y');
            //armazena o ano atual em uma variável
            echo "<input type='number' min='1900' max='$datatual' name='anonasc' required>";
            //comando que adiciona nova tag input com type = number. Armazena o ano de nascimento, que deve estar entre 1900 e o ano atual
        ?>
        <strong>Nacionalidade</strong>
        <select name="nac">
            <option value="brasil.png">Brasileiro</option>
            <option value="alemanha.png">Alemão</option>
            <option value="argentina.png">Argentino</option>
            <option value="franca.png">Francês</option>
            <option value="italia.png">Italiano</option>
            <option value="inglaterra.png">Inglês</option>
            <option value="espanha.png">Espanhol</option>
        </select>
        <!--tag select que permite escolher várias nacionalidades e será usada para determinar o fundo da próxima página-->

        <input type="submit" value="Cadastrar" id="btn">
        <!--botão de submit para cadastrar os valores inseridos-->
    </form>
</body>
</html>