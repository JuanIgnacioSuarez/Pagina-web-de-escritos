<?php
session_start();
$texto=addslashes(stripslashes($_POST['texto']));
$opcion=addslashes(stripslashes($_POST['opcion']));

if(!empty($texto) && $opcion!=="Elija una opcion"){
if(!isset($_SESSION['array'])){
	$_SESSION['array']=array();
}

$_SESSION['array'][]= array(
'texto'=>$texto,
'opcion'=>$opcion);
echo "datos enviados";
}
else{
	echo "";
}

$_SESSION['nombre']=$_POST['opcion'];
$_SESSION['mostrar']=$texto;

?>