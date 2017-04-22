<?php
class Database
{
    private $connection=null;
    function __construct()
    {
        $this->connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
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
