<?php


class MyWebException Extends MyErrorController
{

    public function __construct($code, $message)
    {
        parent::__construct($code,$message);
    }
}