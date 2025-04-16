<?php

require_once("dbConexion.php");


$id = $_GET['id'];

$resultado = mysqli_query($mysqli, "SELECT * FROM computadora WHERE id = $id");

$resultadoDatos = mysqli_fetch_assoc($resultado);

$marca = $resultadoDatos['marca'];
$modelo = $resultadoDatos['modelo'];
$color = $resultadoDatos['color'];
$tamaño = $resultadoDatos['tamaño'];
$tipo = $resultadoDatos['tipo'];
$generacion = $resultadoDatos['generacion'];
$memoria = $resultadoDatos['memoria'];

?>
<html>
<head>	
	<title>Editar Registros</title>
</head>

<body>
    <h2>Editar Registro</h2>
    <p>
	    <a href="index.php">Inicio</a>
    </p>
	
	<form name="editar" method="post" action="editarAction.php">
		<table border="0">
			<tr> 
				<td>Marca</td>
				<td><input type="text" name="marca" value="<?php echo $marca; ?>"></td>
			</tr>
			<tr> 
				<td>Modelo</td>
				<td><input type="text" name="modelo" value="<?php echo $modelo; ?>"></td>
			</tr>
			<tr> 
				<td>Color</td>
				<td><input type="text" name="color" value="<?php echo $color; ?>"></td>
			</tr>
			<tr> 
				<td>Tamaño</td>
				<td><input type="text" name="tamaño" value="<?php echo $tamaño; ?>"></td>
			</tr>
			<tr> 
				<td>Tipo</td>
				<td><input type="text" name="tipo" value="<?php echo $tipo; ?>"></td>
			</tr>
			<tr> 
				<td>Generacion</td>
				<td><input type="text" name="generacion" value="<?php echo $generacion; ?>"></td>
			</tr>
			<tr> 
				<td>Memoria</td>
				<td><input type="text" name="memoria" value="<?php echo $memoria; ?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Modificar"></td>
			</tr>
		</table>
	</form>
</body>
</html>
