<h1 class="nombre-pagina">Olvide Contraseña</h1>

<p class="descripcion-pagina">Reestablé tu contraseña ingresando tu email a continuacion</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Tu Email">
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">¿Ya tenes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tenes una cuenta? Crear tu cuenta</a>
</div>