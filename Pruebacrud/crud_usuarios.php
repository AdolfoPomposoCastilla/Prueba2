<?php
// incluye la clase Db
require_once('bd.php');
class crudUsuarios{
    public function __construct(){}
    public function insertar($usuarios){
        $db=Db::conectar();
        $no = $usuarios->getNombre();
        $ap =$usuarios->getApellidos();
        $co =$usuarios->getcorreo(); 
        $insert ="INSERT INTO usuarios(Nombre, Apellidos, correo, id) VALUES ('$no','$ap','$co',NULL)";
        $db->query($insert);
    }
    public function listarUsu(){
        $db=Db::conectar();
        $listar=[];
        $select=$db->query('SELECT * FROM Usuarios');
        foreach($select->fetchAll() as $usuarios){
            $usuari= new usuarios();
            $usuari->setId($usuarios['id']);
            $usuari->setNombre($usuarios['Nombre']);
            $usuari->setApellidos($usuarios['Apellidos']);
            $usuari->setCorreo($usuarios['correo']);
            $listar[]=$usuari;
        }
        return $listar;
    }
    public function obtenerUsua($id){
        $db=Db::conectar();
        $select=$db->query("SELECT * FROM Usuarios WHERE ID= $id");
        $usuarios=$select->fetch();
        $usuari= new usuarios();
        $usuari->setId($usuarios['id']);
            $usuari->setNombre($usuarios['Nombre']);
            $usuari->setApellidos($usuarios['Apellidos']);
            $usuari->setCorreo($usuarios['correo']);
        return $usuari;
    }
    public function eliminar($id){
        $db=Db::conectar();
        $eliminar ="DELETE FROM Usuarios WHERE ID= '$id'";
        $db->query($eliminar);
    }
    public function actualizar($usuarios){
        $db=Db::conectar();
        $id =$usuarios->getId();
        $no = $usuarios->getNombre();
        $ap =$usuarios->getApellidos();
        $co =$usuarios->getcorreo(); 
        $insert ="UPDATE usuarios SET Nombre='$no',Apellidos='$ap',correo='$co' WHERE id = $id";
        $db->query($insert);
    }
}
?>