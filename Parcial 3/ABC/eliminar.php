<?php
$id = $_POST['idinformacion'];
$servidor = "localhost";
$basedatos = "informacion";
$usuario = "root";
$password = "rodozahir123";
$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar a localhost");
$consulta = "DELETE from tienda where idinformacion like $id";
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