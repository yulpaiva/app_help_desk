<?php
    
    session_start();

    //estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode - depois realizar o desafio usando implode ao invés de acessar variável por variável
    
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;


    //abrindo arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd','a');

    //escrevebdi no arquivo
    fwrite($arquivo,$texto);
    
    //fechando arquivo
    fclose($arquivo);
    
    header('Location: abrir_chamado.php');
    //echo $texto;
?>