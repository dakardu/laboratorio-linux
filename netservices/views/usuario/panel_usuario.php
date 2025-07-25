<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(dirname(__DIR__, 2) . '/config/routes.php');
include HEADER_PATH;

?>

<h2>Zona de Usuario</h2>
<p>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? '', ENT_QUOTES); ?></p>