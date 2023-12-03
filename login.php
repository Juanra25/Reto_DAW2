<?php

session_start();

// Verifica si el formulario de inicio de sesión fue enviado
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Verifica las credenciales
    if ($username === "admin" && $password === "admin") {
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;
        header('Location: admin-control-panel.php');
        exit();
    } else if (isset($_SESSION['user']) && $_SESSION['user'] === $username && $_SESSION['pass'] === $password) {
        // Si las credenciales son válidas, crea una sesión
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;

        // Redirige a la página principal
        header('Location: index.php');
        exit();
    } else {
        // Error en caso de que las credenciales no sean correctas
        $error_message = 'Credenciales incorrectas. Intenta nuevamente.';
    }
}


require("views/header.php"); ?>

<section class="signup">
    <div>
        <form action="" method="post">
            <fieldset>
                <legend>Inicia sesión</legend>
                <?php if (isset($error_message)): ?>
                    <p class="error">
                        <?php echo $error_message; ?>
                    </p>
                <?php endif; ?>
                <p>Nombre de usuario: <input type="text" name="user" required></p>
                <p>Contraseña: <input type="password" name="pass" required></p>
                <p id="signup"><input type="submit" value="Iniciar sesión" name="login"></p>
            </fieldset>
        </form>
        <p>¿No tienes cuenta? <a href="signup.php">¡Regístrate!</a></p>
    </div>
</section>

<?php require("views/footer.php"); ?>