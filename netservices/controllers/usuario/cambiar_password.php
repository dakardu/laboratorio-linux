<?php
session_start();
require_once(dirname(__DIR__, 2) . '/config/conexion.php');
require_once(dirname(__DIR__, 2) . '/config/routes.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['id'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    $query = $conexion->prepare("SELECT password FROM usuarios WHERE id = ?");
    $query->bind_param("i", $user_id);
    $query->execute();
    $result = $query->get_result();
    $user = $result->fetch_assoc();

    if (password_verify($current_password, $user['password'])) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = $conexion->prepare("UPDATE usuarios SET password = ? WHERE id = ?");
        $update_query->bind_param("si", $hashed_password, $user_id);
        if ($update_query->execute()) {
            header('Location: ' . USER_PANEL);
        } else {
            echo "Error al cambiar la contraseña.";
        }
    } else {
        echo "La contraseña actual es incorrecta.";
    }
}
?>
