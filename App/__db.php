<?php
require "env.php";
abstract class DB
{
    protected function conectar()
    {
        try
        {
            $conectar = new PDO("mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_DATABASE,DB_USER,DB_PASSWORD);
            return $conectar;
        }
        catch(PDOException $erro)
        {
            error_reporting(0);
            echo "Erro de Conexão - Aguarde um momento...";
            header("refresh: 0");
            //return $erro->getMessage();  AQUI SERÁ GERADO O LOG DE ERRO!
        }
    } 
}
