<?php include "Connection_db.php";?>
<?php
class CRUD
{
    private $conn;
    private $table_name;

    function __construct($table)
    {
        $this->table_name = $table;
        $this->conn = new Connection_db();
    }

    public function create($username, $password)
    {
        $query = "INSERT INTO $this->table_name(username,password)";
        $query .= "VALUES('$username','$password')";
        $result = mysqli_query($this->conn->get_connect(), $query);
        if (!$result) {
            die("Query FAIELD" . mysqli_error($this->conn->get_connect()));
        } else {
            echo "Registration successful";
        }
    }
    public function read()
    {
        $query="SELECT * FROM users";
        $result= mysqli_query($this->conn->get_connect(),$query);
        if(!$result){
            die("Query FAIELD".mysqli_error());
        }
        while($row=mysqli_fetch_assoc($result)){
            print_r($row);
        }
    }
    public function update($username, $password, $id)
    {
        $query = "UPDATE $this->table_name SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
        $result = mysqli_query($this->conn->get_connect(), $query);
        if (!$result) {
            die("QUERY FAIELD" . mysqli_error($this->conn->get_connect()));
        } else {
            echo "Settings successful";
        }
    }

    public function delete($id)
    {
        $query = "DELETE FROM $this->table_name ";
        $query .= "WHERE id = $id ";
        $result = mysqli_query($this->conn->get_connect(), $query);
        if (!$result) {
            die("QUERY FAIELD" . mysqli_error($this->conn->get_connect()));
        } else {
            echo "Deleting successful";
        }
    }
}