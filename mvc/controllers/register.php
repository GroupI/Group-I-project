<?php
class Register extends Controller{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        $this->view->render("register/index");
    }
    public function other($arg=false){
        require 'models/register_model.php';
        $model=new Register_Model();
        $this->view->blah=$model->blah();
    }

}