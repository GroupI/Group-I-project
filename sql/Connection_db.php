<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','login_db');
class Connection_db
{
    private $connection=null;
    function __construct()
    {
        $this->connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        if(!$this->connection){
            die('Database connection failed'.mysqli_error());
        }
    }
    public function get_connect(){
        return $this->connection;
    }
    public function disconnect()
    {
        $this->connection = null;
    }

}