<?php

namespace Controllers;

use Exception;
use Model\Producto;
use MVC\Router;

class ProductoController {
    public static function datatable(Router $router){
        if(isset($_SESSION['auth_user'])){
        $router->render('productos/datatable', []);
        }else{
            header('Location: /datatable_kenser/');
        }
    }
    public static function guardarAPI(){
        try {
            $producto = new Producto($_POST);
            $resultado = $producto->crear();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro guardado correctamente',
                    'codigo' => 1
                ]);
            }else{
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
    public static function modificarAPI(){
        try {
            $producto = new Producto($_POST);
            $resultado = $producto->actualizar();

            if($resultado['resultado'] == 1){
                echo json_encode([
                    'mensaje' => 'Registro modificado correctamente',
                    'codigo' => 1
                ]);
            }else{
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



    public static function eliminarAPI(){
           
        try {
            $producto_id = $_POST['producto_id'];
            $producto = Producto::find($producto_id);

            $producto->producto_situacion = 0;
            $resultado = $producto->actualizar();
    
            if ($resultado['resultado'] == 1 ){
                echo json_encode([
                    'mensaje' => 'Eliminado correctamente',
                    'codigo' => 1
                ]);
    
            }else{
                echo json_encode([
                    'mensaje' => 'Ocurrió un error al eliminar el registro',
                    'codigo' => 0
                ]);
            }
            
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    
}
    public static function buscarAPI(){
        // $productos = Producto::all();
        $producto_nombre = $_GET['producto_nombre'];
        $producto_precio = $_GET['producto_precio'];

        $sql = "SELECT * FROM productos WHERE producto_situacion = 1 ";
        if ($producto_nombre != '') {
            $producto_nombre = strtolower($producto_nombre);
            $sql .= " AND LOWER(producto_nombre) LIKE '%$producto_nombre%' ";
        }
        if ($producto_precio != '') {
            $producto_precio = strtolower($producto_precio);
            $sql .= " AND producto_precio= '$producto_precio' ";
        }

        try {
            
            $productos = Producto::fetchArray($sql);
    
            echo json_encode($productos);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }
}