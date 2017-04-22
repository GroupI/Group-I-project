<?php

class dashboard_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function xhrInsert()
    {
        $text=$_POST['text'];
        $deadline=$_POST['deadline'];
        $userID =Session::get('user');
        $query="INSERT INTO todoitem(user, ToDo, Done, Deadline) VALUES('$userID','$text','0','$deadline')";
        $result = mysqli_query($this->db->get_connect(), $query);
        echo json_encode(array($text,$deadline));

    }
    function xhrGetListings()
    {
        $userID = Session::get('user');
        $query = "SELECT * FROM todoitem WHERE user = '$userID' ";
        $result = mysqli_query($this->db->get_connect(), $query);
        $data = $result->fetch_all();
        echo json_encode($data);
    }
    function xhrDeleteListing(){
        $id =$_POST['id'];
        $query='DELETE FROM todoitem WHERE id = "'.$id.'"';
        $result = mysqli_query($this->db->get_connect(), $query);
        echo json_encode($id);
    }
}