<?php

class calculator extends Controller
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
        $this->view->js=array('calculator/js/calculator.js');
    }
    public function index()
    {
        $this->db=new Database();

        $this->view->render('header', '', 'true');

        $userID = Session::get('user');
        $data = array();
        $check = 0;

        $this->view->render('calculator/index', '', 'true');
        $this->view->render('footer', '', 'true');


    }
    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    function run(){
        $this->model->run();
    }
}