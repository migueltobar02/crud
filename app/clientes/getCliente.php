<?php
require '../config/Db_conect.php';
$conect= conectar(); 
$id= $conect->real_escape_string( $_POST['id']);

$sql = "SELECT * FROM cliente WHERE id =$id LIMIT 1";
$result = $conect->query($sql);
$rows = $result->num_rows;

$cliente = [];

if($rows > 0){

    $cliente = $result->fetch_array();
   
}
echo json_encode($cliente, JSON_UNESCAPED_UNICODE);
?>