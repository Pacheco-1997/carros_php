<?php 



include("crud.php");

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
        "marca=?,modelo=?,ano=?,placa=?",
        "id_carro=?",
       $teste =  array(
            $marca,
            $modelo,
            $ano,
            $placa,
            $id  // aqui porra 
            
        )
    );
    
}

header("location: index.php");


?>

