<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <h3>Pós-incremento</h3>
        <?php
            $a = 7;

            echo "O valor contigo em a é $a <br />";
            echo 'O valor contigo em a após o incremento é ' . $a++ . ' <br />';
            echo "O valor atualizado $a";
            
        ?>

        <h3>Pré-incremento</h3>
        <?php
            $a = 7;

            echo "O valor contigo em a é $a <br />";
            echo 'O valor contigo em a pré incremento é ' . ++$a . ' <br />';
            echo "O valor atualizado $a";
            
        ?>

        <h3>Pós-decremento</h3>
        <?php
            $a = 7;

            echo "O valor contigo em a é $a <br />";
            echo 'O valor contigo em a após o decremento é ' . $a-- . ' <br />';
            echo "O valor atualizado $a";
            
        ?>

        <h3>Pré-decremento</h3>
        <?php
            $a = 7;

            echo "O valor contigo em a é $a <br />";
            echo 'O valor contigo em a pré decremento é ' . --$a . ' <br />';
            echo "O valor atualizado $a";
            
        ?>

    </body>
    
</html>