<?php
class Database {

    const DB_HOST = "mysql-projeto";//NOME DO CONTAINER    
    const DB_USER = "root";
    const DB_PASS = "12345";
    const DB_BASE = "loja";

    private $transacao;
    private static $instance;
    private function __construct() { }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_BASE);
            mysqli_query(self::$instance,"SET NAMES 'UTF8'");
            mysqli_query(self::$instance,"SET character_set_connection=utf8");
            mysqli_query(self::$instance,"SET character_set_client=utf8");
            mysqli_query(self::$instance,"SET character_set_results=utf8");            
        }
        return self::$instance;
    }
    
    
    public static function transacaoInicio(){
        $transacao = isset($this->transacao) ? $this->transacao : "teste";
        $query = "BEGIN ". $transacao;
        mysqli_query($this->db, $query);
    }
    
    public static function transacaoFim($retorno){
        $transacao = isset($this->transacao) ? $this->transacao : "teste";
        if($retorno){
            $query = "COMMIT ". $transacao;
        }else{
            $query = "ROLLBACK ". $transacao;
        }
        mysqli_query($this->db, $query);
    }    
}
?>