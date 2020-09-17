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

    public function getById($id){
        $item = new Alumno();

        $query = $this->db->connect()->prepare("SELECT * FROM alumno WHERE matricula = :matricula");

        try{
            $query->execute(['matricula' => $id]);

            while($row = $query->fetch()){
                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
            }

            return $item;
        }catch(PDOExcepttion $e){
            return null;
        }
    }

/*
    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE alumno SET nombre = :nombre, apellido = :apelldo WHERE matricula = :matricula");

        try{   
            $query->execute([
                'matricula'=> $item['matricula'],
                'nombre'=> $item['nombre'],
                'apellido'=> $item['apellido']

            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }*/

    public function update($item){
        $query = $this->db->connect()->prepare("UPDATE alumno SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula");
        try{
            $query->execute([
                'matricula'=> $item['matricula'],
                'nombre'=> $item['nombre'],
                'apellido'=> $item['apellido']
            ]);
            return true;
        }catch(PDOException $e){
            return false;

        }
    }

}

?>