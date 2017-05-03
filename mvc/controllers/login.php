<?php
class Login extends Controller{
    function __construct()
    {
        parent::__construct();
        $this->view->js=array('login/js/login.js');
    }
    public function index()
    {

        $this->view->render('login/index');

    }
    function run()
    {
        $this->model->run();
    }
}