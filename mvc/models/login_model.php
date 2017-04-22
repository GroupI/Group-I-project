<?php
class  Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $username = $_POST['Username'];
        $password= $_POST['Password'];
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
        } else {

//            header('location: ../login');
            echo "worng username/password";
        }
    }
}