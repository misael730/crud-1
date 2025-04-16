<?php

require_once("dbConexion.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM computadora WHERE id = $id");

header("Location:index.php");
