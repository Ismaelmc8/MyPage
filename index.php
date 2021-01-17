<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$vista ="";
try {
    require "config/spl_autoload_register.php";

    $frontController = new FrontController();
    $frontController->dispatch();
}catch (MyWebException $e){
    echo "Exception: ";
    echo $e->getException();
    echo "<br>";
    echo "Line: ";
    echo $e->getLine();
    echo "<br>";
    echo "Code: ";
    echo $e->getCode();
    echo "<br>";
    $vista = new ErrorView($e);
    $vista->show();
}catch (Exception $e){
    print_f('Exception: '.$e);
    $vista = new ErrorView($e);
    $vista->show();
}finally{
}

