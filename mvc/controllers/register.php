<?php
class Register extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->js=array('register/js/register.js');
    }
    function index(){
        $this->view->render("register/index");
    }

    function run()
    {
        $this->model->run();
    }
}