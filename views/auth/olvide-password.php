<h1 class="nombre-pagina">Olvidaste tu Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu contraseña escribiendo tu email a continuación:</p>

<?php
    include_once __DIR__ . '/../templates/alertas.php'
?>

<form class="formulario" action="/olvide" method="post">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Tu email">
    </div>

    <input class="boton" type="submit" value="Enviar Instrucciones">

</form>

<div class="acciones">
    <a href="/ ">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una cuenta</a>
</div>