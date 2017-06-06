<?php
include "newsObject.php";
class clientNews extends Controller
{

    private $NewsObjectArray;

//$newObj = new NewsObject((int)$_GET["q"]);
//echo ($newObj->passJson());


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
        $this->view->js=array('News/js/News.js');
    }

    public function JsonNews($index) {
        $this->NewsObjectArray = new NewsObject($index);

    }

    public function index()
    {
        if ( isset($_GET["q"]) ) {
            $this->JsonNews((int)$_GET["q"]);
            echo $this->NewsObjectArray->passJson();
            return;
        }
        $this->view->render('News/index');
    }

}
