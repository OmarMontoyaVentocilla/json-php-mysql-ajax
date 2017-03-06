<?php
require_once 'helperPDO.php';
$driver=new driverBD();
$idproducto=$_POST['idproducto'];
$nombre=$_POST['nombre'];
$precio2=$_POST['precio2'];
$stock2=$_POST['stock2'];

$query_su='UPDATE producto SET producto=:product,stock=:stock,precio=:precio WHERE idproducto=:idpro';
$exe_su=$driver->getProcedure($query_su);
$exe_su->bindParam(':product', $nombre, PDO::PARAM_STR, 100);
$exe_su->bindParam(':stock', $stock2, PDO::PARAM_STR, 50);
$exe_su->bindParam(':precio', $precio2, PDO::PARAM_STR, 50);
$exe_su->bindParam(':idpro', $idproducto, PDO::PARAM_INT);
$resultado=$driver->getExecute($exe_su);

$respuesta="";
if($resultado){
  $respuesta="Se actualizo los datos correctamente";
}else{
  $respuesta="No se pudo actualizar los datos";	
}

echo json_encode($respuesta);

?>