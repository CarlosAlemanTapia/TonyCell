<?php 

  	require 'database.php';

	session_start();

	if(isset($_SESSION['user'])){

	$quien = $_SESSION['user'];

    $records = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :id');
    $records->bindParam(':id', $quien);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  


 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "scripts.php"; ?>
</head>
<body>
<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="jumbotron">
				<!-- <a href="php/salir.php" class="btn btn-info">Salir del sistema</a>
					<h2>Entraste con exito</h2>
					<?= $user['id']; ?> -->

					<?php 

						echo $user['nombre_us'];

						$sucursal_us = $user['sucursal_us'];
						$nivel_us = $user['nivel_us'];


							
							?>
								<script type="text/javascript">
								window.location.replace("sistema/vistaprincipal.php");
								</script>
								<?php

					
						?>

				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
} else {
	header("location:index.php");
	}
 ?>
