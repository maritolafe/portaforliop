<?php
$_nombre=$_POST['nombre'];
$_email=$_POST['email'];
include("conexion.php");
 mysqli_query($datos1_bd,"INSERT INTO contacto VALUES ('$_nombre','$_email')");
 header("location: index.php?ok");

 ?>