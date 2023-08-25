<h1 class="nombre-pagina">Reestrablecer Contraseña</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Tu Nueva Contraseña">
    </div>
    <input type="submit" class="boton" value="Guardar Nueva Contraseña">
</form>

<div class="acciones">
    <a href="/">¿Ya tenes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tenes una cuenta? Crear tu cuenta</a>
</div>