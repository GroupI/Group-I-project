<?php
class ToDoList extends Controller{

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged=Session::get('loggedIn');
        if ($logged==false){
            Session::destroy();
            header('location: ../login');
            exit;
        }
        $this->view->js=array('ToDo_List/js/todo_list.js');
    }
    public function index()
    {
        $this->view->render('ToDo_List/index');
    }
    function xhrInsert()
    {
        $this->model->xhrInsert();
    }
    function xhrGetListings()
    {
        $this->model->xhrGetListings();
    }
    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }
    function xhrDone()
    {
        $this->model->xhrDone();
    }
}