<?php

include_once "view/view_class.php";

class ControlClass{
    
    public function __construct() {
        $name = $_GET["control"]."control";
        include $name.".php";
        $obj = new $name;
        $obj->$_GET["func"]();
    }
}

?>