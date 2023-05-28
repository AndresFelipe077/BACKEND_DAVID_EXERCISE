<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ejercicio_david";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["email"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $gustos = implode(", ", $_POST["gustos"]);

    // Obtener información del archivo de imagen
    $nombreArchivo = $_FILES["fotoImage"]["name"];
    $tipoArchivo = $_FILES["fotoImage"]["type"];
    $tamañoArchivo = $_FILES["fotoImage"]["size"];
    $rutaArchivoTemporal = $_FILES["fotoImage"]["tmp_name"];

    // Directorio de imágenes
    $directorioImagenes = "../img/";

    // Generar un nombre único para el archivo de imagen
    $nombreImagen = uniqid() . "_" . $nombreArchivo;

    // Ruta completa de la imagen
    $rutaDestino = $directorioImagenes . $nombreImagen;

    // Mover el archivo de imagen a la ubicación permanente
    if (move_uploaded_file($rutaArchivoTemporal, $rutaDestino)) {
        $sql = "INSERT INTO user_profile (fotoImage, nombre, apellido, telefono, direccion, email, fechaNacimiento, gustos)
            VALUES ('$nombreImagen', '$nombre', '$apellido', '$telefono', '$direccion', '$correo', '$fechaNacimiento', '$gustos')";

        if (mysqli_query($conn, $sql)) {
            echo "Datos guardados correctamente";
        } else {
            echo "Error al guardar los datos: " . mysqli_error($conn);
        }
    } else {
        echo "Error al mover el archivo";
    }
}

mysqli_close($conn);
?>
