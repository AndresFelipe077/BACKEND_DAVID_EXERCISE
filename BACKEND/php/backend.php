<?php
if ($_GET) {
    $nombre = $_GET['nombre'];
    echo "<h1 class='text-center text-white'>Hola " . $nombre . "</h1>";
}
?>