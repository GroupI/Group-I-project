<?php

class View
{
    function __construct()
    {

    }

    public function render($name, $data = '', $noIncludes = false)
    {

        if ($noIncludes == true) {
            require 'views/' . $name . '.html';
        } else {
            require 'views/header.html';
            require 'views/' . $name . '.html';
            require 'views/footer.html';

        }
    }

}