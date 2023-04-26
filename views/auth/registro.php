<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Regístrate en DevWebCamp</p>

    <?php 
    
        include_once __DIR__ . '/../templates/alertas.php'

    ?>

    <form method="POST" action="/registro" class="formulario" action="POST">

        <div class="formulario__campo">
            <label for="" class="formulario__label">Nombre</label>
            <input type="nombre" value="<?php echo $usuario->nombre?>" class="formulario__input" placeholder="Tu Nombre" id="nombre" name="nombre">
        </div>

        <div class="formulario__campo">
            <label for="" class="formulario__label">Apellido</label>
            <input type="apellido" value="<?php echo $usuario->apellido?>" class="formulario__input" placeholder="Tu Apellido" id="apellido" name="apellido">
        </div>

        <div class="formulario__campo">
            <label for="" class="formulario__label">Email</label>
            <input type="email" value="<?php echo $usuario->email?>" class="formulario__input" placeholder="Tu Email" id="email" name="email">
        </div>

        <div class="formulario__campo">
            <label for="" class="formulario__label">Password</label>
            <input type="password" class="formulario__input" placeholder="Tu Password" id="password" name="password">
        </div>

        <div class="formulario__campo">
            <label for="" class="formulario__label">Repetir Password</label>
            <input type="password" class="formulario__input" placeholder="Repetir Password" id="password2" name="password2">
        </div>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">

    </form>

    <div class="acciones">

        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? inicia sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>

    </div>

</main>