<?php

class album extends Controller
{
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
        $this->view->js=array('album/js/album.js');
    }

    public function index()
    {
        $this->view->render('album/index');
    }
    function run(){
        $this->model->run();
    }
}