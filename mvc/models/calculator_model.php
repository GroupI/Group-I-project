<?php

class calculator_model extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function run()
    {
        if(isset($_GET['CalcEQ']))
        {
            $Ex = $_GET['CalcEQ'];
            $Ex = str_replace("p","+",$Ex);
            $Res = eval('return '.$Ex.';');

            echo json_encode($Res);
        }
        else if(isset($_GET['Calc^']))
        {
            $Ex = $_GET['Calc^'];
            $Ex = str_replace("p","+",$Ex);
            $Ex = eval('return '.$Ex.';');
            $Res = $Ex*$Ex;

            echo json_encode($Res);
        }
        else if(isset($_GET['CalcV']))
        {
            $Ex = $_GET['CalcV'];
            $Ex = str_replace("p","+",$Ex);
            $Res = eval('return '.$Ex.';');

            $Res = sqrt($Res);

            echo json_encode($Res);
        }
        else if(isset($_GET['Calc-1']))
        {
            $Ex = $_GET['Calc-1'];
            $Ex = str_replace("p","+",$Ex);
            $Res = eval('return '.$Ex.';');

            $Res = 1/$Res;

            echo json_encode($Res);
        }
    }
}