<?php

class TodayInHistory extends Controller
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
        $this->view->js=array('TodayInHistory/js/TodayInHistory.js');
    }
    public function index()
    {
        $this->view->render('TodayInHistory/index');
    }
    function passJson()
    {
        $this->model->passJson();

    }
}