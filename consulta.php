<?php
require("conexion.php");
$codigo= $_POST['codigo_consulta'];
$result = mysqli_query($conn, "SELECT nombre_alumno From alumno WHERE codigo_cursos=".$codigo);
//printf("Select returned %d rows.\n", mysqli_num_rows($result));
$consulta = mysqli_fetch_assoc($result);
echo json_encode($consulta );


?>