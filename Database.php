<?php

class Database{
    public $conn;
    public function __construct($config,$username='root',$password=''){
       
        $dsn="mysql:".http_build_query($config,'',';');

        $options=array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION); 

        $this->conn = new PDO($dsn, $username, $password,$options);

    }
    public function qurey($query,$params=[]){
       
      
            $st = $this->conn->prepare($query); 
            $st->execute($params); 

           
            return  $st->fetchAll(PDO::FETCH_ASSOC);
            
       
    }
}
