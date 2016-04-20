<?php

include_once 'databaseConnector.php';

Class Repositorio{
    
    public static function getFrases(){
        $dados = array();
        try{
            $db = Database::getInstance();
            $sql = 'SELECT * FROM livro';
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $dados = $stmt->fetchAll();
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return;
        }
        return $dados;
    }

}

?>

