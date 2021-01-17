<?php


class DefaultView extends View
{


    /**
     * DefaultView constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setContent("templates/tpl_mainpage.php");
    }

}