<?php
require_once 'conexion.php';

$conex=new Conexion();
$cn=$conex->getConexion();
$sql="SELECT * FROM producto";
$stm=$cn->prepare($sql); 
$valor=$stm->execute();  

if($valor){
$data["data"]=[];	
   while($resultado=$stm->fetch(PDO::FETCH_ASSOC)){
       $data["data"][]=$resultado;
   }
   echo json_encode( $data );  
}else{
  echo "error";
}

$stm->closeCursor();
$conex=null;


?>