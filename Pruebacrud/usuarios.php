<?php
class usuarios{
    private $id;
    private $nombre;
    private $apellidos;
    private $correo;
    function __construct(){}
    public function getNombre(){
		return $this->nombre;
		}
    public function setNombre($nombre){
			$this->nombre = $nombre;
	}
    public function getApellidos(){
        return $this->apellidos;
    }
    public function setApellidos($apellidos){
        return $this->apellidos=$apellidos;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        return $this->id=$id;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        return $this->correo=$correo;
    }
}
?>