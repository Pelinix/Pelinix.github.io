<?php
$Nombre = $_GET["Nombre"];
$Telefono = $_GET["Telefono"];
$Correo = $_GET["Correo"];
$Asunto = $_GET["Asunto"];
$Mensaje = $_GET["Mensaje"];

echo "<h2> informacion Recibida </h2>";
echo "el Nombre Recibido es: ". $Nombre . "<br/>";
echo "el Telefono Recibido es: ". $Telefono . "<br/>";
echo "el Correo Recibido es: ". $Correo . "<br/>";
echo "el Asunto Recibido es: ". $Asunto . "<br/>";
echo "el Mensaje Recibido es: ". $Mensaje . "<br/>";

?>