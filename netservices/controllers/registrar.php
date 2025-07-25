<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(dirname(__DIR__) . '/config/conexion.php');
require_once(dirname(__DIR__) . '/config/routes.php');

function sanitizar($data) {
    return htmlspecialchars(trim($data));
}

$username = sanitizar($_POST['username']);
$nombre = sanitizar($_POST['nombre']);
$email = sanitizar($_POST['email']);
$password = sanitizar($_POST['password']);

if(empty($username) || empty($nombre) || empty($email) || empty($password)) {
    echo "<h2>❌ Todos los campos son obligatorios.</h2>";
    exit();
}

$password_segura = password_hash($password, PASSWORD_DEFAULT);
$rol = 'usuario'; // Asignar rol por defecto
$query = $conexion->prepare("INSERT INTO usuarios (username, nombre, correo, password) VALUES (?, ?, ?, ?)");
$query->bind_param("ssss", $username, $nombre, $email, $password_segura);
if ($query->execute()) {
    session_start();
    $_SESSION['id'] = $query->insert_id;
    $_SESSION['username'] = $username;
    $_SESSION['rol_usuario'] = $rol;
    $_SESSION['nombre'] = $nombre;

    header("Location: " . USER_PANEL);
    exit();
} else {
    echo "<h2>❌ Error al registrar: " . $conexion->error . "</h2>";
}
$query->close();
?>