<?php

include_once("./modelos/Modelo.php");

class ModeloController{
    private $model;

    public function __construct()
    {
        $this.$model = new Modelo();
        
    }

    // mostrar
    public static function index(){
        $productos = new Modelo();
        $datos = $productos->mostrar("productos","1");
        require_once("./vistas/index.php");

    }
    //vista nuevo
    public static function nuevo(){
        require_once("./vistas/nuevo.php");
    }

    //guardar
    public static function guardar(){
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $data = "'".$nombre."',".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos",$data);

        header("location:".urlsite);
    }
    // vista editar
    public static function vistaEditar(){
        $id = $_GET['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos","id=".$id);
        require_once('./vistas/editar.php');
    }
    //editar
    public static function editar(){
        $id = $_REQUEST['id'];
        $nombre = $_REQUEST['nombre'];
        $precio = $_REQUEST['precio'];
        $productos = new Modelo();
        $data = "nombre='".$nombre."',precio=".$precio;
        $productos->editar("productos",$data,"id=".$id);

        header("location:".urlsite);
        
    }
    //eliminar
    public static function eliminar(){
        $id = $_GET['id'];
        $producto = new Modelo();
        $producto->eliminar("productos","id=".$id);
        header("location:".urlsite);


    }
}
?>