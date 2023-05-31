<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php
           /*
           //is_array - Verifica se o parametro é um array
           $array = array('Notebook', 'Teclado');
           $retorno = is_array($array);

            if($retorno){
                echo 'Sim, é um array';
            }else {
                echo 'Não, não é um array';
            }
            */

            /*
           //array_keys - Retorna todas as chaves de um array
           $array = [1 => 'a', 7 => 'b', 18 => 'c'];
           echo '<pre>';
                print_r($array);
           echo '</pre>';

           $chaves_array = array_keys($array);
           echo '<pre>';
                print_r($chaves_array);
           echo '</pre>';
            */

            /*
           //sort - Ordena um array e reajusta seus indices
           $array = array('Teclado', 'Mouse', 'Cabo HDMI', 'Gabinete', 'Fonte ATX','Notebook');
           echo '<pre>';
                print_r($array);
           echo '</pre>';

           sort($array); //true ou false
           echo '<pre>';
                print_r($array);
           echo '</pre>';
            */

            /*
            //asort - Ordena um array preservando os indices
           $array = array('Teclado', 'Mouse', 'Cabo HDMI', 'Gabinete', 'Fonte ATX','Notebook');
           echo '<pre>';
                print_r($array);
           echo '</pre>';

           asort($array); //true ou false
           echo '<pre>';
                print_r($array);
           echo '</pre>';
           */

           /*
           //count - Conta a quantidade de elementos de um array
           $array = array('Teclado', 'Mouse', 'Cabo HDMI', 'Gabinete', 'Fonte ATX','Notebook');
           echo '<pre>';
                print_r($array);
                echo count($array);
           echo '</pre>';
            */

            /*
            //array_merge - Funde um ou mais arrays
            $array1 = ['OSX', 'Windows'];
            $array2 = array('Linux');
            $array3 = ['Solaris'];

            $novo_array = array_merge($array1, $array2, $array3);

            echo '<pre>';
                    print_r($novo_array);
            echo '</pre>';
            */

            /*
            //explode - Divide uma string baseada em um delimitador
            $string = '26/04/2023';
            $array_retorno = explode('/', $string);

            echo '<pre>';
                    echo $string;
                    echo '<br />';
                    print_r($array_retorno);
                    echo $array_retorno[2]. '-' .$array_retorno[1]. '-' .$array_retorno[0];
            echo '</pre>';
            */

            //implode - Junta elementos de um array em uma string
            $array = ['a', 'b', 'x', 'y']; // a,b,x,y
            $string_retorno = implode(',', $array);
            echo $string_retorno;

        ?>

    </body>
    
</html>