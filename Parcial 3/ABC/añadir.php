<?php
$idd=$_POST['idinformacion'];
$marc=$_POST['MarcaProd'];
$nomb=$_POST['NombreProd'];
$colo=$_POST['Color'];
$alma=$_POST['Almacenamiento'];
$tipo=$_POST['TipoPantalla'];
$sist=$_POST['SistemaOperativo'];
$inve=$_POST['Inventario'];

$servidor='localhost';
$basedatos='informacion';
$usuario='root';
$password='rodozahir123';

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar");
$consulta = "INSERT INTO tienda(idinformacion, MarcaProd, NombreProd, Color, Almacenamiento, TipoPantalla, SistemaOperativo, Inventario) 
VALUES('$idd','$marc','$nomb','$colo','$alma','$tipo','$sist','$inve')";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

if($registros){
    header("Location:Formulario.html");
}
else{
    echo "arregla esto";
}
?>