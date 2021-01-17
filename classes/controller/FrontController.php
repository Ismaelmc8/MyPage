<?php
/**
 * Class FrontController
 * Controlar las entradas por eventos
 */

class FrontController extends Controller
{

    public function __construct(){
        //Verificar la base de datos

        try {
            DB::getInstance();
        } catch (MyWebException $e) {
            throw new MyWebException($e,"Error en la base de datos, no se puede instanciar");
        }
    }

    public function dispatch(){

        //Get event front buttons and form and call to views

        if (isset($_SESSION["loggedin"])){
            if ($_SESSION["loggedin"]){
                $vista = new UserView();
                $vista->setUser(new User());
            }else{
                $vista = new DefaultView();
            }
        }else{
            $vista = new DefaultView();
        }

        // SI FORMULARI ENVIAT
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            // -- LOGIN -- //
            if ($_REQUEST['Accedir'] == "Accedir") {
                $userController = new UserController();
                // Miro si se accede bien. Si esta bien retorna un usuario, si no, un false
                if (!$user = $userController->login()){
                    // no logeado, vista por defecto
                    $vista = new DefaultView();
                    $vista->show();
                    exit;
                }else{
                    // logeado correctamente, cargando vista de usuario con un usuario.

                    $vista = new UserView();
                    $vista->setUser($user);
                    $vista->show();
                    exit;

                }
            }

            // -- LOGOUT -- //
            if ($_REQUEST['Cerrar'] == 'LogOut') {
                $userController = new UserController();
                $userController->logout();
                $vista = new DefaultView();
                $vista->show();
                exit;
//                session_destroy();
//                unset($_SESSION);
            }

            if ($_REQUEST['Registre'] == "Registrar-me") {
                $vista = new RegisterView();
                $vista->show();
                exit;
            }

            if ($_REQUEST['Enviar'] == "Enviar") {
                $userController = new UserController();
                if ($valor = $userController->register()){
                    $vista = new DefaultView();
                    $vista->show();
                    exit;
                    // añadir mensaje de : felicidades, se ha registrado
                    // redireccionar a login
                }else{
                    // añadir usuario
                    $vista = new RegisterView();
                    $vista->show();
                    exit;
                }
            }

        }
        $vista->show();
    }


}