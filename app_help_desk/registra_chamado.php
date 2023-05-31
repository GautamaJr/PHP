<?php

    session_start();

    //trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    /*
    //Utilizando implode e criando uma unica string com os valores
    //implode('#', $_POST);

    $valores = array(
        str_replace('#', '-', $_POST['titulo']),
        str_replace('#', '-', $_POST['categoria']),
        str_replace('#', '-', $_POST['descricao'])
    );

    $texto = implode('#', $valores);
    */

    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    //$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a'); 
    /* OBSERVACAO ^
      Acesso ao arquivo em outro repositorio como proteção; 
      criar uma pasta ( app_help_desk ) dentro da pasta do xampp e colocar os arquivos 'arquivo.hd' e 'valida_login.php' dentro da pasta criada.
    */

    //escrevendo o texto
    fwrite($arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    //echo $texto;
    header('Location: abrir_chamado.php');



?>