<?php 
include("con_db.php");

if (isset($_POST['register'])) {
		if (strlen($_POST['producto']) >= 1 && strlen($_POST['cantidad']) >= 1) {
			$id_producto = trim($_POST['producto']);
			$cantidad = trim($_POST['cantidad']);
			$fechareg = date("y/m/d");
			$consulta = "INSERT INTO cantidad(id_articulo, cantidad, fecha_reg) VALUES ('$id_producto','$cantidad','$fechareg')";
			$resultado = mysqli_query($conex,$consulta);
			if ($resultado) {
				?>
				<h3 class="correcto">¡Se ha registrado correctamente!</h3>
				<?php 
			} else {
				?>
				<h3 class="error">¡Ups, ha ocurrido un error!</h3>
				<?php 
			}
	} else {
		?>
		<h3 class="error">¡Por favor, complete los campos!</h3>
		<?php 
	}
}

?>