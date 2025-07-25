<?php
define('BASE_URL', 'http://192.168.1.114/netservices/');
define('ADMIN_URL', BASE_URL . 'admin/admin.php');
define('CSS_ADMIN', BASE_URL . 'assets/css/stilo-admin.css');
define('CSS_GENERAL', BASE_URL . 'assets/css/stilo-general.css');
define('USER_PANEL', BASE_URL . 'views/usuario/panel_usuario.php');
define('LOGIN_URL', BASE_URL . 'views/login.php');
define('LOGIN_ACTION_URL', BASE_URL . 'controllers/login.php');
define('LOGOUT_URL', BASE_URL . 'controllers/logout.php');
define('HEADER_PATH', dirname(__DIR__ ) . '/header.php');
define('EDITAR_USUARIO_URL', BASE_URL . 'controllers/usuario/editar_usuario.php');
define('ELIMINAR_USUARIO_URL', BASE_URL . 'controllers/usuario/eliminar_usuario.php');
define('EDITAR_FORMULARIO_URL', BASE_URL . 'admin/editar_formulario.php');
define('ACCESO_DENEGADO_URL', BASE_URL . 'views/acceso_denegado.php');
define('REGISTRAR_USUARIO_URL', BASE_URL . 'views/registro.php');
define('ACCION_REGISTRAR_URL', BASE_URL . 'controllers/registrar.php');
define('LOGO_URL', BASE_URL . 'assets/img/logo.png');
