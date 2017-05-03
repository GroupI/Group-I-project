<?php

class ToDoList_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function xhrInsert()
    {
        $text=$_REQUEST['t'];
        $deadline=$_REQUEST['d'];
        $userID =Session::get('user');
        $query="INSERT INTO todoitem(user, ToDo, Done, Deadline) VALUES('$userID','$text','0','$deadline')";
        $result=mysqli_query($this->db->get_connect(), $query);
        echo json_encode(array($text,$deadline));
    }
    function xhrGetListings()
    {
        $userID = Session::get('user');
        $query = "SELECT * FROM todoitem WHERE user = '$userID' ";
        $result = mysqli_query($this->db->get_connect(), $query);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($data);
    }
    function xhrDeleteListing(){
        $id =$_REQUEST['id'];
        $query='DELETE FROM todoitem WHERE id = "'.$id.'"';
        $result = mysqli_query($this->db->get_connect(), $query);
        echo $result;
    }
    function xhrDone(){
        $id =$_REQUEST['id'];
        $query = 'UPDATE todoitem SET Done = "1" WHERE id = "'.$id.'"';
        $result = mysqli_query($this->db->get_connect(), $query);
        echo $result;
    }
}