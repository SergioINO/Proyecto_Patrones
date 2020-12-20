<?php
header('Content-Type: text/html; charset=utf-8');

require_once './patrones/AbstractFactory/EjemploAbstractFactory.php';
require_once './patrones/Builder/EjemploBuilder.php';
require_once './patrones/FactoryMethod/EjemploFactoryMethod.php';
require_once './patrones/Prototype/EjemploPrototype.php';
require_once './patrones/Singleton/EjemploSingleton.php';

use AbstractFactory\EjemploAbstractFactory;
use Builder\EjemploBuilder;
use FactoryMethod\EjemploFactoryMethod;
use Prototype\EjemploPrototype;
use Singleton\EjemploSingleton;

class apiPatrones
{
    public function api()
    {
        header('Content-Type: application/JSON');
        $method = $_SERVER['REQUEST_METHOD'];
        switch ($method) {
            case 'GET': //consulta
                echo 'METODO NO SOPORTADO';
                break;
                break;
            case 'POST': //actualiza
                $this->EjemplosPatrones();
                break;
            case 'PUT': //inserta
                echo 'METODO NO SOPORTADO';
                break;
            case 'DELETE': //elimina
                echo 'METODO NO SOPORTADO';
                break;
            default:
                echo 'METODO NO SOPORTADO';
                break;
        }
    }

//genera las respuestas
    public function response($code = 200, $status = "", $message = "")
    {
        http_response_code($code);
        if (!empty($status) && !empty($message)) {
            $response = array("status" => $status, "mensaje" => $message);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

    public function EjemplosPatrones()
    {

        if ($_GET['action'] == 'EjemploAbstractFactory') {
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(200, "Error000", "No se agrego JSON");
            } else {

                $ejemplo = new EjemploAbstractFactory($obj->opcion, $obj->num_autos, $obj->num_scooters);
                $respuesta = $ejemplo->generar();
                // var_dump($respuesta);
                if ($respuesta['Estado'] == 'success') {
                    $this->response(200, "success", $respuesta['Response']);
                } else {
                    $this->response(200, "Error999", $respuesta['Response']);
                    exit;
                }
            }

            exit;
        }
        if ($_GET['action'] == 'EjemploBuilder') {
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(200, "Error000", "No se agrego JSON");
            } else {

                $ejemplo = new EjemploBuilder($obj->opcion, $obj->cliente);
                $respuesta = $ejemplo->generar();
                // var_dump($respuesta);
                if ($respuesta['Estado'] == 'success') {
                    $this->response(200, "success", $respuesta['Response']);
                } else {
                    $this->response(200, "Error999", $respuesta['Response']);
                    exit;
                }
            }

            exit;
        }

        if ($_GET['action'] == 'EjemploFactoryMethod') {
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(200, "Error000", "No se agrego JSON");
            } else {

                $ejemplo = new EjemploFactoryMethod($obj->opcion, $obj->monto);
                $respuesta = $ejemplo->generar();
                // var_dump($respuesta);
                if ($respuesta['Estado'] == 'success') {
                    $this->response(200, "success", $respuesta['Response']);
                } else {
                    $this->response(200, "Error999", $respuesta['Response']);
                    exit;
                }
            }

            exit;
        }

        if ($_GET['action'] == 'EjemploPrototype') {
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(200, "Error000", "No se agrego JSON");
            } else {

                $ejemplo = new EjemploPrototype($obj->cliente, $obj->opcion);
                $respuesta = $ejemplo->generar();
                // var_dump($respuesta);
                if ($respuesta['Estado'] == 'success') {
                    $this->response(200, "success", $respuesta['Response']);
                } else {
                    $this->response(200, "Error999", $respuesta['Response']);
                    exit;
                }
            }

            exit;
        }

        if ($_GET['action'] == 'EjemploSingleton') {
            $obj = json_decode(file_get_contents('php://input'));
            $objArr = (array) $obj;
            if (empty($objArr)) {
                $this->response(200, "Error000", "No se agrego JSON");
            } else {

                $ejemplo = new EjemploSingleton($obj->nombre, $obj->direccion, $obj->email);
                $respuesta = $ejemplo->generar();
                // var_dump($respuesta);
                if ($respuesta['Estado'] == 'success') {
                    $this->response(200, "success", $respuesta['Response']);
                } else {
                    $this->response(200, "Error999", $respuesta['Response']);
                    exit;
                }
            }

            exit;
        }
        $this->response(400);
    }

}
