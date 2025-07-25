<?php 
require_once(dirname(__DIR__) . '/config/routes.php');
include HEADER_PATH;
?>
<div class="container mt-5">
  <h2 class="text-center text-light mb-4">Formulario de registro</h2>

  <form action="<?php echo ACCION_REGISTRAR_URL; ?>" method="post">
    <div class="mb-3">
        <label for="username" class="form-label">Nickname</label>
        <input type="text" name="username" class="form-control" placeholder="Nickname" required>
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre completo</label>
        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" name="email" class="form-control" placeholder="Correo electronico" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Registrar</button>
  </form>
</div>
