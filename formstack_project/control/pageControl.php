<?php

class pageControl extends ViewClass{

    function home(){
        include_once "model/page_mode.php";
        $obj = new PageMode();
        $this->assign("users", $obj->getData());
        
    }
}

?>