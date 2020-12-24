<?php
include("crud.php");

    if(isset($_GET['id'])){
        $acao = "editar";

        $crud = new Crud();
        $before_fetch = $crud->selectBanco("*","carro","where id_carro=?", array($_GET['id']));
        
        $fetch = $before_fetch->fetch(PDO::FETCH_ASSOC);
        $id = $fetch['id_carro'];
        $marca = $fetch['marca'];
        $modelo = $fetch['modelo'];
        $ano = $fetch['ano'];
        $placa = $fetch['placa'];
        

    }else{
        $acao = "cadastrar";
        $id = 0;
        $marca = "";
        $modelo = "";
        $ano = "";
        $placa = "";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style.css">
    <title>Cadastro</title>
</head>
<body>
    </br></br>
    <div class="center">
    <h1>Cadastro de Carros</h1>
    </div>
    <div class="center">
      
        <form name="formCadastro" id="formCadastro" method="POST" action="cadastro.php">
            <input type="hidden" name="acao" id="acao" value="<?php echo $acao;?>">
            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">

        <label class="label" for="marca">Marca </label><br>
            <input type="text" name="marca" id="marca" value="<?php echo $marca;?>"><br><br>
        <label class="label" for="modelo">Modelo </label><br>
            <input type="text" name="modelo" id="modelo" value="<?php echo $modelo;?>"><br><br>
        <label class="label" for="ano">Ano </label><br>
            <input type="text" name="ano" id="ano" value="<?php echo $ano;?>"><br><br>
        <label class="label" for="placa">Placa </label><br>
            <input type="text" name="placa" id="placa" value="<?php echo $placa;?>"><br><br>
            <input type="submit" value="<?php echo $acao;?>">&nbsp;&nbsp;
            <a href="seleciona.php">buscar</button>
        </form>
        
        
        
      
    </div>
</body>
</html>



