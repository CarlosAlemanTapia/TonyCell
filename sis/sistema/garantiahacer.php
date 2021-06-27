<?php

#Salir si alguno de los datos no está presente
if(!isset($_GET["numero_nota"]) 
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";

$numero_nota = $_GET["numero_nota"];
$garantia = 'Si';
$status = 'En Proceso';



$sentencia = $base_de_datos->prepare("UPDATE equipos SET status = ?, garantia = ?  WHERE numero_nota = ?;");

$resultado = $sentencia->execute([$status, $garantia, $numero_nota]);

if($resultado === TRUE){
	header("Location: ./historial.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>