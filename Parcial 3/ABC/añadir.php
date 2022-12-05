<?php
$id6=$_POST['idInformacion'];
$NOMBRE=$_POST['idNombre'];
$GENERO=$_POST['idGenero'];
$SUBGEN=$_POST['idsubGenero'];
$AUTOR=$_POST['idAutor'];
$IDIOMA=$_POST['idIdioma'];
$EDITORIAL=$_POST['idEditorial'];
$AÑO=$_POST['idAño'];

$servidor='localhost';
$basedatos='baselibro';
$usuario='root';
$password='';

$idLibro=$_POST['par1'];
try {
    $con = new PDO($servidor,$usuario,$password,$basedatos);
} catch(PDOException $e) {
    echo "Error de conexion a la base de datos";
    echo $e->getMessage();
    exit();
}
try {
$consultaSql = " Insert into libro (idLibro, Nombre, Genero, SubGenero, Autor, Idioma, Editorial, Año) VALUES ('$id',
'$NOMBRE','$GENERO','$SUBGEN','$AUTOR','$IDIOMA','$EDITORIAL','$AÑO')";
$consulta = $con -> prepare($consultaSql);
$consulta -> execute();
$consulta->closeCursor();
echo "SE HAN INTRODUCIDO LOS DATOS DEL NUEVO REGISTRO CORRECTAMENTE";

} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>