<?php

class Controller{
    function __construct(){
        echo 'Controlador Base';
        $this->view = new View();
    }
}

?>