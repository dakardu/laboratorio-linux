<?php
require_once __DIR__ . '/../config/routes.php';
session_start();
session_unset();
session_destroy();
header("Location: " . BASE_URL. "index.php");
exit();