<?php


class ErrorView extends View
{


    public function __construct($error)
    {

    }

    public function content($error){
        $html="<h1>Error {$error->getException()}</h1>";

    }
}