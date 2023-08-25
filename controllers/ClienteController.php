<?php

namespace Controllers;

use Exception;
use Model\Cliente;
use MVC\Router;

class ClienteController
{
    public static function datatable(Router $router){
        if(isset($_SESSION['auth_user'])){
        $router->render('clientes/datatable', []);
        }else{
            header('Location: /datatable_kenser/');
        }
    }

    public static function guardarAPI()
    {
        try {
            $cliente = new Cliente($_POST);
            $resultado = $cliente->crear();

            if ($resultado['resultado'] == 1) {
                echo json_encode([
                    'mensaje' => 'Registro guardado correctamente',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function modificarAPI()
    {
        try {
            $cliente = new Cliente($_POST);
            $resultado = $cliente->actualizar();

            if ($resultado['resultado'] == 1) {
                echo json_encode([
                    'mensaje' => 'Registro modificado correctamente',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function eliminarAPI()
    {
        try {
            $cliente_id = $_POST['cliente_id'];
            $cliente = Cliente::find($cliente_id);
            $cliente->cliente_situacion = 0;
            $resultado = $cliente->actualizar();

            if ($resultado['resultado'] == 1) {
                echo json_encode([
                    'mensaje' => 'Registro eliminado correctamente',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }
    
    public static function buscarAPI()
    {
        $cliente_nombre = $_GET['cliente_nombre'] ?? '';
        $cliente_nit = $_GET['cliente_nit'] ?? '';

        $sql = "SELECT * FROM clientes WHERE cliente_situacion = 1 ";
        if ($cliente_nombre != '') {
            $cliente_nombre = strtolower($cliente_nombre);
            $sql .= " AND LOWER(cliente_nombre) LIKE '%$cliente_nombre%' ";
        }
        if ($cliente_nit != '') {
            $cliente_nit = strtolower($cliente_nit);
            $sql .= " AND cliente_nit= '$cliente_nit' ";
        }

        try {

            $clientes = Cliente::fetchArray($sql);

            echo json_encode($clientes);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }
}