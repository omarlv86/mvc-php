<?php

include_once 'models/alumno.php';

class ConsultaModel extends Model {

    public function _construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM alumno");

            while($row = $query->fetch()){
                $item = new Alumno();
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];

                array_push($items, $item);
            }

            return $items;
        }catch(PDOException $e){
            return [];
        }
        
    }

}

?>