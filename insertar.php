<?php  

try {
 if (!empty($_POST["nombre"]) || !empty($_POST["correo"]) || !empty($_POST["telefono"]) || !empty($_POST["mensaje"])) {

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$mensaje=$_POST["mensaje"];


// conexion
$con = new mysqli("remotemysql.com", "PQZrumS25B", "R7EQNTH5Ow","PQZrumS25B");


$sql="INSERT INTO contactame (`nombre`, `correo`, `telefono`, `mensaje`)
VALUES ('$nombre', '$correo', '$telefono', '$mensaje');";
$con->query($sql);
mysqli_close($con);

echo "<script>
alert('Enviado Correctamente');
window.location.href='index.php';
</script>";

}else{
    echo "<script>
alert('CAMPOS VACIOS');
window.location.href='index.php';
</script>";
}  
} catch (mysqli_sql_exception $e) {
    die('Error buscarProductoNuevo: ' . $e->getMessage());
}
?>
