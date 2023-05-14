<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre        = $_POST['nombre'];
  $apellido      = $_POST['apellido'];
  $email         = $_POST['email'];
  $telefono      = $_POST['telefono'];
  $direccion     = $_POST['direccion'];
  $fechaNacimiento = $_POST['fechaNacimiento'];

  // Concatenar los valores en una variable
  $informacionCompleta = "Nombre: " . $nombre . "<br>";
  $informacionCompleta .= "Apellido: " . $apellido . "<br>";
  $informacionCompleta .= "Email: " . $email . "<br>";
  $informacionCompleta .= "Teléfono: " . $telefono . "<br>";
  $informacionCompleta .= "Dirección: " . $direccion . "<br>";
  $informacionCompleta .= "Fecha de Nacimiento: " . $fechaNacimiento;

  echo "<h1 class='text-center text-white'>Información completa:</h1>";
  echo $informacionCompleta;
}
?>
