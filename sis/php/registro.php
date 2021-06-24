<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre_us=$_POST['nombre_us'];
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		
		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into usuarios (nombre_us,usuario,password)
				values ('$nombre_us','$usuario','$password')";
			echo $result=mysqli_query($conexion,$sql);

		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from usuarios 
				where usuario='$user' and password='$pass'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>