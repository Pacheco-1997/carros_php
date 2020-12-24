<?php
include("crud.php");

$crud = new Crud();
$idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$crud->deletaDados(
    "carro",
    "id_carro = ?",
    array(
        $idUser
    )
    
    );

header("location: seleciona.php");

?>