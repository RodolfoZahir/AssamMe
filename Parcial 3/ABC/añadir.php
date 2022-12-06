<?php
$idd=$_POST['idinformacion'];
$marc=$_POST['idMarcaProd'];
$nomb=$_POST['idNombreProd'];
$colo=$_POST['idColor'];
$alma=$_POST['idAlmacenamiento'];
$tipo=$_POST['idTipoPantalla'];
$sist=$_POST['idSistemaOperativo'];
$inve=$_POST['idInventario'];

$servidor='localhost';
$basedatos='informacion';
$usuario='root';
$password='rodozahir123';

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar");
$consulta = "insert into tienda(idinformacion, MarcaProd, NombreProd, Color, Almacenamiento, TipoPantalla, SistemaOperativo, Inventario) 
VALUES('$idd','$marc','$nomb','$colo','$alma','$tipo','$sist','$inve')";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");

if($registros){
    header("Location:Formulario.html");
}
else{
    echo "arregla esto";
}
?>