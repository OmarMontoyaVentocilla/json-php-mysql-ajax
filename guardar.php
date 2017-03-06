<?php 
require_once 'conexion.php';
$conex=new Conexion();
$cn=$conex->getConexion();
$producto=$_POST['producto'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];

$sql="INSERT INTO producto(producto,stock,precio) VALUES (:producto,:stock,:precio);";
$stm=$cn->prepare($sql);
$respuesta=false;
$stm->bindParam(':producto',$producto,PDO::PARAM_STR);
$stm->bindParam(':stock',$stock,PDO::PARAM_INT);
$stm->bindParam(':precio',$precio,PDO::PARAM_INT);
$respuesta=$stm->execute();
$rp="";
if($respuesta){
 	$rp="esta bien";
 }else{
 	$rp="mal";
 }
echo json_encode($rp);
?>