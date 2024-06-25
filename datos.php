<?php

include_once "conexion.php";
$conexion = conexion();



// Recuperamos los datos del formulario
$nombre = $_POST["Nombre"];
$descripcion = $_POST["Descripcion"];

// Componemos la sentencia SQL
$ssql = "INSERT INTO productos (Nombre, Descripcion) values ('$nombre','$descripcion')";

// Ejecutamos la sentencia y comprobamos si ha ido bien
if($conexion->query($ssql)) {
  echo "<p>Registro insertado con éxito</p>";
} else {
  echo "<p>Hubo un error al ejecutar la sentencia de inserción: {$conexion->error}</p>";
}
$conexion->close();

?>

