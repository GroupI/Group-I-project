<?php

class dashboard_model extends Model
{
    private $userID;
    function __construct()
    {
        parent::__construct();
        $userID = Session::get('user');
    }

    function getusername()
    {
        echo $this->userID;
    }
}