<?php

require_once("dbConexion.php");

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$marca = mysqli_real_escape_string($mysqli, $_POST['marca']);
	$modelo = mysqli_real_escape_string($mysqli, $_POST['modelo']);
	$color = mysqli_real_escape_string($mysqli, $_POST['color']);
	$tamaño = mysqli_real_escape_string($mysqli, $_POST['tamaño']);
	$tipo = mysqli_real_escape_string($mysqli, $_POST['tipo']);
	$generacion = mysqli_real_escape_string($mysqli, $_POST['generacion']);
	$memoria = mysqli_real_escape_string($mysqli, $_POST['memoria']);

	

	if (empty($marca) || empty($modelo) || empty($color) || empty($tamaño) || empty($tipo) || empty($generacion) || empty($memoria)) {
		if (empty($marca)) {
			echo "<font color='red'>Campo marca no debe estar vacio</font><br/>";
		}
		
		if (empty($modelo)) {
			echo "<font color='red'>Campo modelo no debe estar vacio</font><br/>";
		}
		
		if (empty($color)) {
			echo "<font color='red'>Campo color no debe estar vacio</font><br/>";
		}
		if (empty($tamaño)) {
			echo "<font color='red'>Campo tamaño no debe estar vacio</font><br/>";
		}
		if (empty($tipo)) {
			echo "<font color='red'>Campo tipo no debe estar vacio</font><br/>";
		}
		if (empty($generacion)) {
			echo "<font color='red'>Campo generacion no debe estar vacio</font><br/>";
		}
		if (empty($memoria)) {
			echo "<font color='red'>Campo memoria no debe estar vacio</font><br/>";
		}
	} else {
		
		$result = mysqli_query($mysqli, "UPDATE computadora SET `marca` = '$marca', `modelo` = '$modelo', `color` = '$color', `tamaño` = '$tamaño', `tipo` = '$tipo', `generacion` = '$generacion', `memoria` = '$memoria' WHERE `id` = $id");
		
		
		echo "<p><font color='green'>Datos Fueron Modificados</p>";
		echo "<a href='index.php'>Ver Resultado</a>";
	}
}
