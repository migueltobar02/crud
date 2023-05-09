<?php
session_start();
require '../config/Db_conect.php';
if(isset($_SESSION['Usuario'])){
    
$conect= conectar(); 
$nombre = $conect->real_escape_string( $_POST['InputNombre']);
$apellido = $conect->real_escape_string( $_POST['InputApellido']);
$cedula = $conect->real_escape_string( $_POST['InputCedula']);
$email = $conect->real_escape_string( $_POST['InputEmail']);
$telefono = $conect->real_escape_string( $_POST['InputTelefono']);
$valor = $conect->real_escape_string($_POST['valor']);
$sql= "INSERT INTO  cliente ( Nombre, Apellido, Cedula, Email, Telefono , Estado) VALUES ( '$nombre', '$apellido', '$cedula', '$email', '$telefono' ,'$valor')";


if($result = $conect->query($sql)){
    $id = $conect->insert_id;
}
header('Location: cliente.php');  
    
}

    
?>
