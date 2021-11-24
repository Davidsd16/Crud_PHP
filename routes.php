<?php

    echo $controller;
    echo $accion;


    include_once("controllers/controller".$controller.".php");
    
    $objController="Controller".ucfirst($controller);

    $controller= new $objController();
    
    $controller->$accion();
?>