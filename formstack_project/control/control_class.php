<?php

class ControlClass{
    
    public function __construct(){
        $name = $_GET['control']."Control";
        include name.".php";
        $obj = new $name;
        $obj->$_GET["func"]();
    }
}

?>