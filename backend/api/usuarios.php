<?php
    header("Content-Type: application/json");
    include_once("../class/class-usuario.php");
    $_POST = json_decode(file_get_contents('php://input'),true);
    switch($_SERVER['REQUEST_METHOD']){
        case 'POST':
        break;
        case 'GET':
            if(isset($_GET['id'])){
                //obtener un usuario
            }else{
                
                //obtener todos los usuarios  
                      }
        break;
        case 'PUT':
            //actualizar
        break;
        case 'DELETE':
            //Eliminar
        break;    

    }

?>