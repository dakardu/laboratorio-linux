<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(dirname(__DIR__, 2) . '/config/conexion.php');
require_once(dirname(__DIR__, 2) . '/config/routes.php');
include HEADER_PATH;

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['id'], $_POST['username'], $_POST['nombre'], $_POST['correo'], $_POST['rol'])) {
    die("Acceso incorrecto.");
}

$id = $_POST['id'];
$username = $_POST['username'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$rol = $_POST['rol'];

$query = $conexion->prepare("UPDATE usuarios SET username = ?, nombre = ?, correo = ?, rol = ? WHERE id = ?");
$query->bind_param("ssssi", $username, $nombre, $correo, $rol, $id);
$query->execute();
$query->close();

header("Location: " . ADMIN_URL);
exit();
?>