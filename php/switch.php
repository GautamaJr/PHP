<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php
           
           $parametro = 2;

            switch ($parametro){
                case 1:
                    echo 'Entrou no case 1';
                    break;
                
                case 2:
                    echo 'Entrou no case 2';
                    break;

                case 3:
                    echo 'Entrou no case 3';
                    break;

                default: //opcional
                    echo 'Entrou no default';
                    break;

            }

        ?>

    </body>
    
</html>