<?php
class  Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $username = $_REQUEST['username'];
        $password= $_REQUEST['password'];
        $query = "SELECT id FROM users WHERE ";
        $query .= "username = '$username' and ";
        $query .= "Password = '$password' ";

        $result = mysqli_query($this->db->get_connect(), $query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($row['id'] > 0) {
            Session::init();
            Session::set('loggedIn',true);
            Session::set('user',$row['id']);
            header('location: ../dashboard');
            //echo true;
        } else {
            echo false;
        }
    }
}