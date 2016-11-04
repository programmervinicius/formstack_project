<?php

class PageMode{
    private $db;
    function __construct(){
        $this->db = new mysqli("localhost:8080", "root", "", "my_app");
    }
    
    function getData(){
        $result = $this->$db->query("select * from 'users'");
        $i=0;
        while($row[$i] = $result->fetch_array(MYSQLI_ASSOC)){
            $i++;
        }
        return $row;
    } 
}


?>