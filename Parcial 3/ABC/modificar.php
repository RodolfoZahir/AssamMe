<?php
$id = $_POST['idinformacion'];
$servidor = "localhost";
$basedatos = "informacion";
$usuario = "root";
$password = "rodozahir123";

$idd=$_POST['idinformacion'];
$marc=$_POST['MarcaProd'];
$nomb=$_POST['NombreProd'];
$colo=$_POST['Color'];
$alma=$_POST['Almacenamiento'];
$tipo=$_POST['TipoPantalla'];
$sist=$_POST['SistemaOperativo'];
$inve=$_POST['Inventario'];

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "update tienda set idinformacion='$idd',MarcaProd='$marc',NombreProd='$nomb',Color='$colo', Almacenamiento";
$registros = mysqli_query($con,$consulta) or die("problemas en el select");
//Resultado como array asociativo
$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);

if($registros){
    header("Location:Formulario.html");
}
else{
    echo "Soluciona el error.";
}
?>