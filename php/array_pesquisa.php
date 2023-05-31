<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php
           
           //in_array() - retorna true ou false para a existencia do que esta sendo procurado. 
           //array_search() - retorna o indice do valor pesquisado, caso ele exista
           
           $lista_coisas = ['Banana', 'Maçã', 'Morango', 'Uva'];
            /*
           echo '<pre>';
                print_r($lista_coisas);
           echo '</pre>';

           /* Metodo utilizando in_array()
           $existe = in_array('Abacate', $lista_coisas);
           //true -> texto = 1
           //false -> texto = vazio
                        
            $existe = array_search('Uva', $lista_coisas);
            //null -> texto = vazio
            
            if($existe != null){ //true / false
                echo 'Sim, o valor pesquisado existe no array';
            }else {
                echo 'Não, o valor pesquisado não existe no array';
            }
            */

           $lista_coisas = [
                'frutas' => $lista_coisas,
                'pessoas' => ['João', 'Maria']
            ];

            echo '<pre>';
                print_r($lista_coisas);
            echo '</pre>';

           echo in_array('Uva', $lista_coisas['frutas']);

        ?>

    </body>
    
</html>