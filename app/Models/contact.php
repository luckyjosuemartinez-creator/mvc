<?php

namespace app\Models

use mysqli;

class Contact {

    protected $db_host = 'DB_HOST',
    protected $db_user = 'DB_USER',
    protected $db_pass = 'DB PASS',
    protected $db_name = 'DB_NAME'

    public function __construct(){
        $this->connectio();
    }
    
    public function connection(){
        new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
    }

    if($this->connection->connect_error){
        die('Error de conexión:'. $this->connection->connect_error);
    }

   public function query($sql){ 
        $this->query = $this->connection->query($sql);
   }
    public function first(){
        return $this->query->fetch_assoc();
    }
    public function get(){ 
        return $this->query->Fetch_all (MYSQLI_ASSOC); 
        
    }
?>