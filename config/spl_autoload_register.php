<?php
spl_autoload_register (

    function ($class){
        $folders = array (
            'view',
            'controller',
            'core',
            'model'
        );
        foreach ($folders as $folder){
            $path = 'classes/'.$folder.'/'.$class.'.php';
            if(file_exists($path)){
                require_once($path);
                return;
            }
        }
        throw new MyWebException(200,"no se puede acceder al fichero : " .$path);
    });
