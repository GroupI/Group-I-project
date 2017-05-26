<?php
class Register_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    public function run(){
        $username = $_REQUEST['username'];
        $password= $_REQUEST['password'];
        $cpassword=$_REQUEST['cpassword'];

        if($cpassword!=$password){
            echo "2";//אם הססימסא לא תואמת
            return false;
        }

        $query = "SELECT id FROM users WHERE ";
        $query .= "username = '$username'";

        $result = mysqli_query($this->db->get_connect(), $query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($row['id'] > 0) {
            echo "3";//אם קיים כבר שם משתמש כזה
            return false;
        }

            $query = "INSERT INTO users(username,password)";
            $query .= "VALUES('$username','$password')";
            $result = mysqli_query($this->db->get_connect(), $query);
            if (!$result) {
                die("Query FAIELD" . mysqli_error($this->db->get_connect()));
            }
            else {
                echo true;
            }
    }
}