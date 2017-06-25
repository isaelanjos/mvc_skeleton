<?php

/**
* Conexão Banco de Dados
*/
class DB
{
	
    private static $pdo;
    
    public static function connection(){
        if(!isset(self::$pdo)){
            try {
                self::$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET,DB_USERNAME,DB_PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                self::$pdo->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);                 
            } catch (PDOException $e) {
                echo 'MSG: '.$e->getMessage();
            }
            
        }
        return self::$pdo;
    }
    
    public static function prepare($sql){
        return self::connection()->prepare($sql);
    }

}