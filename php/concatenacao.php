<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php

            $nome = 'Maria';
            $cor = 'amarelo';
            $idade = 25;
            $atividade_preferida = 'andar de bicicleta';

            $fumante_sn = false;
           
            //operador .
           echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;

            //ao inves do . pode ser utilizado aspas duplas para fazer a concatenacao

           echo '<br />';

           echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida";

           

           echo '<br />';

           echo 'Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida'

        ?>

    </body>
    
</html>