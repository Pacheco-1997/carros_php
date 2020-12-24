<?php

include("crud.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Pesquisa</title>
</head>
<body>
    <div class="center">
        <table class="tabelacrud">
            <tr>
                <td>Marca</td>
                <td>Modelo</td>
                <td>Ano</td>
                <td>Placa</td>
                <td>Ações</td>
            </tr>
           <?php
           
           $crud = new Crud();
           $before_fetch = $crud->selectBanco(
               "*",
               "carro",
               "",
               array()
           );

           

           while($fetch = $before_fetch->fetch(PDO::FETCH_ASSOC)){ 
            
            ?>
             <tr>
                <td><?php echo $fetch['marca'];?></td>
                <td><?php echo $fetch['modelo'];?></td>
                <td><?php echo $fetch['ano'];?></td>
                <td><?php echo $fetch['placa'];?></td>
                <td>
                    <a href="<?php echo "visualiza.php?id={$fetch['id_carro']}"; ?>">visualizar</a>
                    <a href="<?php echo "index.php?id={$fetch['id_carro']}"; ?>">editar</a>
                    <a href="<?php echo "deleta.php?id={$fetch['id_carro']}"; ?>">deletar</a>
                </td>
            </tr>
            
            <?php
           }
            

           ?>
        </table><br>
        <a href="index.php">voltar</a>
    </div>
</body>
</html>
