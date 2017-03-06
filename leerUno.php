<?php
require_once 'helperPDO.php';
$driver=new driverBD();
$idproducto=$_POST['id'];

$query='SELECT idproducto,producto,stock,precio FROM producto WHERE idproducto=:idpro';
$stm=$driver->getProcedure($query);
$stm->bindParam(':idpro', $idproducto, PDO::PARAM_INT);
$stm->execute();
$row=$driver->getCellView($stm);
echo json_encode($row);
exit;
?>