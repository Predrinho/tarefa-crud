<?php
    $pos = $_GET['pos'];
    $pos2 = $pos+1;
    $sabor = $_POST['sabor'];
    $qtde = $_POST['qtde'];
    $arquivo = fopen("dados.txt","r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";",$linha);
    fclose($arquivo);
    $dados[$pos] = $sabor;
    $dados[$pos2] = $qtde;
    $array = array_filter($dados);
    $file = 'dados.txt';
    unlink($file);
    $arq = fopen("dados.txt","w");
    if($arq == false) die('Não foi possível criar o arquivo');
    foreach($array as $item){
        $arquivo = 'dados.txt';
        $texto = $item.";";
        $file = fopen($arquivo,'a');
        fwrite($file,$texto);
    }
    fclose($arq);
    header("location: index.php");
?>