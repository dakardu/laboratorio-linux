<?php
session_start();

require_once(dirname(__DIR__) . '/config/conexion.php');
require_once(dirname(__DIR__) . '/config/routes.php');

$correo = $_POST['email'] ?? '';
$contraseña = $_POST['password'] ?? '';

if ($correo && $contraseña) {
    $query = $conexion->prepare("SELECT id, username, nombre, password, rol FROM usuarios WHERE correo = ?");
    $query->bind_param("s", $correo);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows === 1) {
        $usuario = $result->fetch_assoc();
        if (password_verify($contraseña, $usuario['password'])) {
            // Guardar datos de la sesión
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['rol_usuario'] = $usuario['rol'];
            $_SESSION['username'] = $usuario['username'];
            $_SESSION['nombre_usuario'] = $usuario['nombre'];
            if ($usuario['rol'] === 'admin') {
                header("Location:" . ADMIN_URL);
            } elseif ($usuario['rol'] === 'usuario') {
                header("Location:" . USER_PANEL);
            }else {
                header("Location:" . BASE_URL . "views/acceso_denegado.php");
            }
            exit();
        } else {
            echo "<h3>❌ Contraseña incorrecta.</h3>";
        }
    } else {
        echo "<h3>❌ Usuario no encontrado.</h3>";
    }
    $query->close();
} else {
    echo "<h3>❌ Acceso no autorizado.</h3>";
}
$conexion->close();
?>
