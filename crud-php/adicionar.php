<html>
<head>
	<title>Adicionar Registro</title>
</head>

<body>
	<h2>Adicionar</h2>
	<p>
		<a href="index.php">Inicio</a>
	</p>

	<form action="adicionarAction.php" method="post" name="add">
		<table width="25%" border="0">
			
			

			<tr> 
				<td>Marca</td>
				<td><input type="text" name="marca"></td>
			</tr>
			<tr> 
				<td>Modelo</td>
				<td><input type="text" name="modelo"></td>
			</tr>
			<tr> 
				<td>Color</td>
				<td><input type="text" name="color"></td>
			</tr>
			<tr> 
				<td>Tamaño</td>
				<td><input type="text" name="tamaño"></td>
			</tr>
			<tr> 
				<td>Tipo</td>
				<td><input type="text" name="tipo"></td>
			</tr>
			<tr> 
				<td>Generacion</td>
				<td><input type="text" name="generacion"></td>
			</tr>
			<tr> 
				<td>Memoria</td>
				<td><input type="text" name="memoria"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="submit" value="Adicionar"></td>
			</tr>
		</table>
	</form>
</body>
</html>

