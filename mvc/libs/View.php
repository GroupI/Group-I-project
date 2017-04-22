<?php

class View
{
    function __construct()
    {

    }

    public function render($name, $data = '', $noIncludes = false)
    {

        if ($noIncludes == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';

        }
    }

}