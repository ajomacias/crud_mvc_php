<?php
require_once("config.php");
require_once("./controladores/index.php");

if(isset($_GET['m'])):
    if(method_exists('ModeloController',$_GET['m'])):
        ModeloController::{$_GET['m']}();
    endif;
else:
    ModeloController::index();
endif;