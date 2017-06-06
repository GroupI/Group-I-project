<?php 

include "currencyRepresent.php";
class clientCurrency extends Controller
{
    private $currencyObjectArray;

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
    public function CurrencyObject($index) {
        $this->currencyObjectArray = new currencyRepresent($index);
    }
//    function passJson(){
//        echo $this->currencyObjectArray;
//    }
    public function index()
    {

        if ( isset($_GET["q"]) ) {
            $this->CurrencyObject((int)$_GET["q"]);
            echo $this->currencyObjectArray->passJson();
            return;
        }
        $this->view->render('currency/index');
    }
}