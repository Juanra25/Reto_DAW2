<?php
session_start();

// Verifica que el formulario de registro ha sido enviado
if (isset($_POST['signup'])) {
    $newUsername = $_POST['user'];
    $newPassword1 = $_POST['pass1'];
    $newPassword2 = $_POST['pass2'];

    // Verifica si las contraseñas coinciden y las guarda en una sesión
    if ($newPassword1 === $newPassword2) {
        $_SESSION['user'] = $newUsername;
        $_SESSION['pass'] = $newPassword1;

        // Redirige a la página de inicio de sesión
        header('location: login.php');
        exit();
    } else {
        // Error en caso de que las contraseñas no coincidan
        $error_message = 'Las contraseñas no coinciden. Intenta nuevamente.';
    }
}



require("views/header.php"); ?>

<section class="signup">
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>Registro</legend>
                <?php if (isset($error_message)): ?>
                    <p class="error">
                        <?php echo $error_message; ?>
                    </p>
                <?php endif; ?>
                <p>Nombre de usuario: <input type="text" name="user" required></p>
                <p>Contraseña: <input type="password" name="pass1" required></p>
                <p>Repita contraseña <input type="password" name="pass2" required></p>
                <p id="signup"><input type="submit" value="Registrarse" name="signup"></p>
            </fieldset>
        </form>
        <p>¿Ya tienes una cuenta? <a href="login.php">¡Inicia sesión!</a></p>
    </div>
</section>

<?php require("views/footer.php"); ?>