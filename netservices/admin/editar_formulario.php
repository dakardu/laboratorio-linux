<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/conexion.php';
require_once __DIR__ . '/../config/routes.php';
include HEADER_PATH;

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id === 0) {
    die("ID de usuario no válido.");
    exit();
}

$query = $conexion->prepare("SELECT username, nombre, correo, rol FROM usuarios WHERE id = ?");
$query->bind_param("i", $id);
$query->execute();
$result = $query->get_result();

if($result->num_rows === 0) {
    die("Usuario no encontrado.");
    exit();
}
$usuario = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar Usuario: <?php echo htmlspecialchars($usuario['nombre']); ?></h2>
    <form action="<?php echo EDITAR_USUARIO_URL; ?>" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="username" id="username" value="<?php echo $usuario['username']; ?>">
        <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" required>
        <input type="email" name="correo" id="correo" value="<?php echo $usuario['correo']; ?>" required>
        <select name="rol" id="rol">
            <option value="admin" <?php if ($usuario['rol'] === 'admin') echo 'selected'; ?>>Administrador</option>
            <option value="user" <?php if ($usuario['rol'] === 'user') echo 'selected'; ?>>Usuario</option>
        </select>
       <button type="submit">Actualizar</button>
    </form>
</body>
</html>
        