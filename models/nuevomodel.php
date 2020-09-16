<?php

class NuevoModel extends Model {

    public function _construct(){
        parent::__construct();
    }

    public function insert($datos){
        //Insertar datos en la BD
        try{
            $query = $this->db->connect()->prepare('INSERT INTO ALUMNO (matricula, nombre, apellido) VALUES (:matricula, :nombre, :apellido)');
            $query->execute([ 'matricula' => $datos['matricula'], 'nombre' => $datos['nombre'], 'apellido' => $datos['apellido'] ]);
            return true;
            
        }catch(PDOException $e){
            //echo $e->getMessage();
            //echo "Ya existe esa matricula";
            return false;
        }
        
    }

}

?>