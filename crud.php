<?php
include("conexao.php");
include("variaveis.php");
class Crud extends Conexao{

    private $crud;
    private $cont;


    private function preparedStatements($query, $parameters){
        
        $this->countParam($parameters);
        $this->crud = $this->conectaBanco()->prepare($query);
        
        if($this->cont > 0 )
        for ($i = 1 ; $i <= $this->cont; $i++ ) { 
            $this->crud->bindValue($i,$parameters[$i-1]);
        }

        $this->crud->execute();
        
    }

    // contador de parametros

    private function countParam($parameters){

         $this->cont= count($parameters);
    }



    public function insertBanco($table, $condition, $parameters){
         
        $this->preparedStatements("insert into {$table} values ({$condition})", $parameters);
        return $this->crud;
    }


    public function selectBanco($campos ,$table, $condition, $parameters){
         
        $this->preparedStatements("select {$campos} from {$table}  {$condition}", $parameters);
        return $this->crud;
    }

    public function deletaDados($table, $condition, $parameters){
        $this->preparedStatements("delete from {$table} where {$condition}", $parameters);
        $this->crud;
    }

    public function updateBanco($table, $set, $condition, $parameters){

        $this->preparedStatements("update {$table} set {$set} where {$condition}", $parameters);
        return $this->crud;
    }
}



?>