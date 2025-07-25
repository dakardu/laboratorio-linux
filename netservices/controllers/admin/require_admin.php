<?php
if (!isset($_SESSION['rol_usuario']) || $_SESSION['rol_usuario'] !== 'admin') {
    header("Location:" . BASE_URL . "views/acceso_denegado.php");
    exit();
}
?>