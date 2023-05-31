<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php

            //operadores condicionais/comparação
            //==
            //=== Se os valores forem iguais e do mesmo tipo
            //!= ou <>
            //!==
            // <
            // >
            // <=
            // >=

            //operador lógicos
            //E: && ou AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiros
            //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expressões for verdadeiro
            //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa, ou vice-versa
            //! -> inverte o resultado retornado pela expressões

            //() estabelecer procedência

            //f e v = falso
            //v e v = verdade
            //f ou f = falso
            //v ou f = verdade
            //v xor f = verdade
            //f xor f = falso
            //v xor v = falso


            if(22 == 22 && 3 == 3 && 5 != 5){
                echo 'Verdadeiro';
            }else{
                echo 'Falso';
            }
            

        ?>

    </body>
    
</html>