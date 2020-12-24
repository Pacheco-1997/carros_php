<?php 



include("crud.php");
$id = 0;
$crud = new Crud();

if($acao=='cadastrar'){

$crud->insertBanco(
     "carro",
     "?,?,?,?,?",
     array(
         $id,
         $marca,
         $modelo,
         $ano,
         $placa 
     )
);

}else{
    $crud->updateBanco(
        "carro",
        "marca = ?, modelo = ?,  ano = ? , placa = ?",
        "id_carro = ?",
        array(
            $marca,
            $modelo,
            $ano,
            $placa,
            $id
        )
    );
}

header("location: index.php");


?>

