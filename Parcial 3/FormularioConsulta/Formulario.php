<?php
$id = $_POST['idinformacion']; //Hola
$servidor = "localhost";
$basedatos = "informacion";
$usuario = "root";
$password = "rodozahir123";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die ("No se pudo conectar a localhost");
$consulta = "select * from tienda where idinformacion=$id";
$registros = mysqli_query($con,$consulta) or die ("Problemas en el select");

//Resultado como array asociativo
$result = mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);
?>