<?php
require '../config/Db_conect.php';
$conect= conectar(); 

// 1=inactivo 0=activo
$id_cliente = $conect->real_escape_string( $_POST['id']);
//DELETE FROM cliente WHERE id= $id_cliente 
//UPDATE client Status = 1 WHERE id = $id_cliente"
$sql= "UPDATE cliente SET Estado = '1' WHERE id= $id_cliente";


if($result = $conect->query($sql)){
    
}
header('Location: cliente.php');  
    
?>