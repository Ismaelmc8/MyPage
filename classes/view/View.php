<?php


class View
{
    protected $head;
    protected $_header;
    protected $_nav;
    protected $_content;
    protected $_footer;
    protected $_lenguage;

    protected $_errorsDetectats;

    public function __construct()
    {
        $this->head = "templates/tpl_head.php";
        $this->_header = "templates/tpl_header.php";
        $this->_nav = "templates/tpl_nav.php";
        $this->_lenguage = "";
        $this->_content = "";
        $this->_footer = "templates/tpl_footer.php";

    }


    public function show(){

        var_dump($this);
        include $this->head;
        include $this->_header;
        include $this->_nav;
        //include $this->_content;
        include $this->_footer;
    }
    public function setContent($body) {
        $this->_content = $body;
    }

    public function getErrorsDetectats()
    {
        return $this->_errorsDetectats;
    }

    public function setErrorsDetectats($_errorsDetectats)
    {
        $this->_errorsDetectats = $_errorsDetectats;
    }


}