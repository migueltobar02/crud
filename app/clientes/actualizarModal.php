<?php
require '../config/Db_conect.php';
$conect= conectar(); 
$id_cliente = $conect->real_escape_string( $_POST['id']);
$nombre = $conect->real_escape_string( $_POST['InputNombre']);
$apellido = $conect->real_escape_string( $_POST['InputApellido']);
$cedula = $conect->real_escape_string( $_POST['InputCedula']);
$email = $conect->real_escape_string( $_POST['InputEmail']);
$telefono = $conect->real_escape_string( $_POST['InputTelefono']);
$sql= "UPDATE cliente SET id = '$id_cliente', Nombre = '$nombre', Apellido = '$apellido', Cedula = '$cedula', Email = '$email', `Telefono` = '$telefono' WHERE id = $id_cliente";


if($result = $conect->query($sql)){
    
}
header('Location: cliente.php');  
    
?>