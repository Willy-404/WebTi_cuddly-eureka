<?php
class Conexao{
    public static function getConexao(){
        //mysql__connect("localhost","usuario","senha","bd");
        
        //classe PDO connection  $dsn = new PDO('mysql:host=localhost;dbname=test',$user,$pass);
        return new PDO('mysql:host=localhost;dbname=crud',"root","admin",
            PDO:ATTR_ERROMODE->ERROR_EXCPTION
        );
    }
}