<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registrar usuario</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="post">
		<h1>Formulario de inventario</h1>
		<select name="producto" class="producto">
			<option value="1">Coca-Cola</option>
			<option value="4">Fanta</option>
			<option value="5">Del Valle</option>
			<option value="6">Santa Clara</option>
			<option value="7">Sprite</option>
			<option value="8">Sidral Mundet</option>
			<option value="9">Coca-Cola Light</option>
			<option value="10">Powerade</option>
			<option value="11">Sabritas</option>
			<option value="12">Doritos Nacho</option>
			<option value="13">Sabritas Adobadas</option>
			<option value="14">Churrumais</option>
			<option value="15">Rancheritos</option>
			<option value="16">Rufles</option>
			<option value="17">Cheetos Torciditos</option>
			<option value="18">Cheetos Flaming</option>
			<option value="19">Doritos Flaming</option>
			<option value="20">Lucas Muecas</option>
			<option value="21">Lucas Chamoy</option>
			<option value="22">Lucas Gusano</option>
			<option value="23">PikLucas</option>
			<option value="24">Lucas Panzon</option>
			<option value="25">Arroz</option>
			<option value="26">Frijoles</option>
			<option value="27">Sal</option>
			<option value="28">Huevo</option>
			<option value="29">Azucar</option>
			<option value="30">Harina</option>
		</select>
		<input type="number" name="cantidad" placeholder="Ingrese la cantidad">
		<input type="submit" name="register">
	</form>
	<?php 
	include("registrar.php");
	?>
</body>
</html>
