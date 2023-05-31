<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso PHP</title>
    </head>
    
    <body>

        <?php
           
           //gettype() = retorna o tipo da variável
           $valor = true;
           //Casting
           //$valor2 = (float) $valor; //float, double
           //$valor2 = (string) $valor; 
           
           //$valor2 = (integer) $valor; //integer, int
           //$valor2 = (string) $valor; 

           $valor2 = (boolean) $valor; //bool, boolean
           
           //$valor2 = (int) $valor;
           $valor2 = (string) $valor;
           $valor3 = (int) $valor2;

           

           echo $valor. ' ' . gettype($valor);
           echo '<br />';
           echo $valor2. ' ' . gettype($valor2);
           echo '<br />';
           echo $valor3. ' ' . gettype($valor3);

        ?>

    </body>
    
</html>