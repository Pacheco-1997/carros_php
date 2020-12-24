<?php

if(isset($_POST['acao'])){
    $acao=filter_input(INPUT_POST,'acao',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['acao'])){
    $acao=filter_input(INPUT_POST,'acao',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $acao = "";
}

if(isset($_POST['id'])){
    $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $id=filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id = 0;
}

if(isset($_POST['marca'])){
    $marca=filter_input(INPUT_POST,'marca',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['marca'])){
    $marca=filter_input(INPUT_POST,'marca',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $marca = "";
}

if(isset($_POST['modelo'])){
    $modelo=filter_input(INPUT_POST,'modelo',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['modelo'])){
    $modelo=filter_input(INPUT_POST,'modelo',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $modelo = "";
}

if(isset($_POST['ano'])){
    $ano=filter_input(INPUT_POST,'ano',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['ano'])){
    $ano=filter_input(INPUT_POST,'ano',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $ano = "";
}

if(isset($_POST['placa'])){
    $placa=filter_input(INPUT_POST,'placa',FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['placa'])){
    $placa=filter_input(INPUT_POST,'placa',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $placa = "";
}


?>