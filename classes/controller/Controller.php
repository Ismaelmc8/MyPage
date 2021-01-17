<?php
/**
 * Class Controller
 * Cargar las funciones generales que van a tener todos los controladores
 */

class Controller
{
    private $config;

    public function __construct()
    {
        $this->config = new Config();

    }

    public static function sanitize($valor){
        return htmlspecialchars(stripslashes(trim($valor)));
    }

}