<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(dirname(__DIR__, 2) . '/config/routes.php');
include HEADER_PATH;
require_once(dirname(__DIR__, 2) . '/controllers/usuario/require_usuario.php');
require_once(dirname(__DIR__, 2) . '/config/conexion.php');

if (!isset($_SESSION['id'])) {
    // Redirigir si el ID de usuario no está en la sesión
    header('Location: ' . LOGIN_URL);
    exit;
}

$user_id = $_SESSION['id'];
$query = $conexion->prepare("SELECT username, nombre, correo FROM usuarios WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_assoc();

?>

<div class="container mt-5">
    <h2 class="text-center text-light mb-4">Mi Perfil</h2>

    <div class="card bg-dark text-light p-4 shadow">
        <div class="card-body">
            <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($user['nombre']); ?></p>
            <p><strong>Correo:</strong> <?php echo htmlspecialchars($user['correo']); ?></p>
        </div>
    </div>

    <h3 class="text-center text-light mt-5 mb-4">Cambiar Contraseña</h3>

    <form action="<?php echo BASE_URL . 'controllers/usuario/cambiar_password.php'; ?>" method="post">
        <div class="mb-3">
            <label for="current_password" class="form-label">Contraseña Actual</label>
            <input type="password" name="current_password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="new_password" class="form-label">Nueva Contraseña</label>
            <input type="password" name="new_password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirmar Nueva Contraseña</label>
            <input type="password" name="confirm_password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Cambiar Contraseña</button>
    </form>
</div>
