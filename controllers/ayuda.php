<?php

class Ayuda extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->render('ayuda/index');

        //echo "<p>Nuevo controlador Main</p>";
    }

}

?>