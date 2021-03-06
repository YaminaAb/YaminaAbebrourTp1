<?php
class Crud extends PDO{

    public function __construct(){
        parent::__construct("mysql:host=localhost;dbname=associationdesdons;charset=utf8", "root", "");
       
    }

    public function insert($table, $data){

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql ="INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";

        $query = $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            return $query->errorInfo();
        }else{
            return $this->lastInsertId();
        }
    }

    public function select($table, $champOrdre = null, $ordre = null){
        if($champOrdre == null){
            $sql= "SELECT * FROM $table";
        }else{
            $sql = "SELECT * FROM $table ORDER BY $champOrdre $ordre";
        }
        $query = $this->query($sql);
        return $query->fetchAll();
    }


    public function selectId($table, $champ, $id){
        $sql = "SELECT * FROM $table WHERE $champ = :$champ";
        $query = $this->prepare($sql);
        $query->bindValue(":$champ", $id);
        $query->execute();
        return $query->fetch();
    }


    public function update($table, $data, $champ, $id){
        $champRequete = null;
        foreach($data as $key=>$value){
            $champRequete .=$key."=:".$key.", ";
        }
        $champRequete = rtrim($champRequete, ", ");
        $sql = "UPDATE $table SET $champRequete WHERE $champ = :$champ";

        $query= $this->prepare($sql);
        foreach($data as $key=>$value){
            $query->bindValue(":$key", $value);
        }
        if(!$query->execute()){
            print_r($query->errorInfo());
        }else{
            return $id;
        }
    }

    public function delete($table, $colone, $id, $url){
        $sql = "DELETE FROM $table WHERE $colone = $id";      
        //echo $id;
        //echo $colone;
        //die();        
        $query = $this->query($sql);
        header("Location: $url");      
    }
   
    
}









?>