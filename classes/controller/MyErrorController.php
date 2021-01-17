<?php


class MyErrorController Extends Exception
{
    protected $exception;
    protected $mensaje;


    public function __construct($code,$message)
    {
        parent::__construct();
        $this->exception = $code;
        $this->mensaje = $message;
    }

    /**
     * @return mixed
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @return mixed
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
}