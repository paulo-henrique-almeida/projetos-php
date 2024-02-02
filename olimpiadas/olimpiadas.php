<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Convocação Futebol Olímpico Masculino</title>
    <style>
          img {
               height: 15vh;
               width: auto;
               margin-bottom: 5vh;
          }
          /*deixa a imagem com 15% da altura da tela, sua largura automática e uma margem para baixo de 5% da altura da tela*/
          .content {
               background-color: white;
               display: flex;
               justify-content: center;
               align-items: center;
               flex-direction: column;
               width: 70vw;
               height: 70vh;
               border: black solid 5px;
               border-radius: 15px;
               font-size: 1.5em;
               padding: 2vh;
          }
          /*estiliza uma classe, chamada content, para ter fundo branco, centralizar horazontalmente e verticalmente o conteúdo, ter 70% da altura e largura da tela, ter uma borda de 5 pixels com 15 pixels de arredondamento, o tamanho da fonte como 1.5em e um espaçamento correspondente a 2% da tela entre a borda e o conteúdo*/
          body {
               font-family: Arial;
               font-size: 2em;
               display: flex;
               align-items: center;
               justify-content: center;
               flex-direction: column;
               height: 90vh;
          }
          /*faz os elementos dentro do body terem a fonte Arial, tamanho 2em e ficarem centralizados verticalmente e horizontalmente*/
     </style>
     </head>
     <?php

          $pnome = $_POST["nome"];
          $pclube = $_POST["clube"];
          $panonasc = $_POST["anonasc"];
          $pnac = $_POST["nac"];
          //recebe os valores do formulário e os armazena e em variáveis
          $idade = date('Y') - $panonasc;
          //a variável idade recebe o ano atual menos o ano de nascimento

          echo "<body background='imagens/$pnac'>";
          //abre a tag body com a imagem de fundo dependendo da nacionalidade
               echo "<div class='content'>";
               //abre a tag div com a classe content
                    echo "<img src='imagens/olimpiadas-logo'>";
                    echo "$pnome - $pclube <BR><BR>";
                    //mostra o nome e o clube cadastrado
                    if ($idade <= 23 && $idade >= 16) {
                    //verefica se a idade é menor ou igual a 23 (idade olímpica) e maior que 16 (para poder ter contrato profissional, seguindo a Lei Pelé)
                         echo "Situação: pode ser convocado";
                         //caso seja, poderá ser convocado
                    } else {
                         echo "Situação: não pode ser convocado.<BR><BR><BR>";
                         //caso não, não poderá ser convocado
                    }
                    echo "Para mais informações, clique <a href='https://www.goal.com/br/not%C3%ADcias/por-que-so-jogadores-sub-23-podem-disputar-o-futebol-nas-olimpiadas/zuvl7sq9bx09z252881slyfh' target='_blank'>aqui</a>";
                         //cria uma âncora para o site goal.com para se obter mais informações sobre os critérios de convocação
               echo "</div>";
               //fecha a tag div
     ?>
</body>
</html>