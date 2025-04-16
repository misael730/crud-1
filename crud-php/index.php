<?php
// Include the database connection file
require_once("dbConexion.php");


$result = mysqli_query($mysqli, "SELECT * FROM computadora ORDER BY id DESC");
?>

<html>
<head>	
	<title>Clase 1 CRUD</title>
</head>

<body>
	<h2>Sistemas Informaticos</h2>
	<p>
		<a href="adicionar.php">adicionar nueva computadora</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>id</strong></td>
			<td><strong>marca</strong></td>
			<td><strong>modelo</strong></td>
			<td><strong>color</strong></td>
			<td><strong>tamaño</strong></td>
			<td><strong>tipo</strong></td>
			<td><strong>generacion</strong></td>
			<td><strong>memoria</strong></td>
			<td><strong>Acciones</strong></td>

		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['marca']."</td>";
			echo "<td>".$res['modelo']."</td>";
			echo "<td>".$res['color']."</td>";
			echo "<td>".$res['tamaño']."</td>";
			echo "<td>".$res['tipo']."</td>";
			echo "<td>".$res['generacion']."</td>";	
			echo "<td>".$res['memoria']."</td>";	
			echo "<td><a href=\"editar.php?id=$res[id]\">Editar</a> | 
			<a href=\"eliminar.php?id=$res[id]\" onClick=\"return confirm('Desea Eliminar el registro?')\">Eliminar</a></td>";
		}
		?>
	</table>
</body>
</html>
