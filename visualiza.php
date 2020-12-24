<?php

include("crud.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Visualizar</title>
</head>
<body>
    </br></br>
   
    <div class="center">
      
    <?php

        $crud = new Crud();
        $idUser = filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
        $before_fetch = $crud->selectBanco(
            "*",
            "carro",
            "where id_carro = ?",
            array($idUser)

        );

       $fetch = $before_fetch->fetch(PDO::FETCH_ASSOC); 

?>

    <h1>Dados do carro</h1>
    <hr>
    <strong>Marca:</strong><?php  echo $fetch['marca'] ?><br>
    <strong>Modelo:</strong><?php  echo $fetch['modelo'] ?><br>
    <strong>Ano:</strong><?php  echo $fetch['ano'] ?><br>
    <strong>Placa:</strong><?php  echo $fetch['placa'] ?><br><br>
    <a href="seleciona.php">voltar</a>
      
    </div>
</body>
</html>




