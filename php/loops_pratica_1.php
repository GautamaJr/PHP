<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php
               
            $registros = array(
                array('titulo' => 'Titulo notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
                array('titulo' => 'Titulo notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
                array('titulo' => 'Titulo notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
                array('titulo' => 'Titulo notícia 4', 'conteudo' => 'Conteúdo notícia 4')

            );
            
            echo '<pre>';
            print_r($registros);
            echo '</pre>';
            echo '<br /><br /><br />';

            //count -> conta a quantidade de elementos de array
            //$idx = 0; //Comentado para utilizar o for na linha 54
            echo 'O array possui: ' . count($registros) . ' registros.';
            echo '<br />';
            /*
            while($idx < count($registros)){
                
                echo '<h3>'. $registros[$idx]['titulo']. '</h3>';
                echo '<p>'. $registros[$idx]['conteudo']. '</p>';

                echo '<hr />';

                $idx++;
            }
            */

            /*
            // utilizando do, while
            do{
                echo '<h3>'. $registros[$idx]['titulo']. '</h3>';
                echo '<p>'. $registros[$idx]['conteudo']. '</p>';

                echo '<hr />';

                $idx++;
            } while($idx < count($registros));
            */

            
            // utilizando for
            for($idx = 0; $idx < count($registros); $idx++){
                echo '<h3>'. $registros[$idx]['titulo']. '</h3>';
                echo '<p>'. $registros[$idx]['conteudo']. '</p>';

                echo '<hr />';
            }
            


        ?>

    </body>
    
</html>