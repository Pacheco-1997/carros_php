<?php

 class Conexao{

function conectaBanco(){
    try {
    
        $con = new PDO("mysql:host=127.0.0.1;dbname=carros","root","");
        return $con;
   
   } catch (PDOException $Erro) {
       return $Erro->getMessage();
   }
}
}





?>