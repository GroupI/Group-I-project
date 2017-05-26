<?php


class currency extends Controller
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
        $this->view->js=array('currency/js/currency.js');
    }
    public function index()
    {
        $this->view->render('currency/index');
    }
    function passJson()
    {
        $this->model->passJson();
    }
}