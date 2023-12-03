<?php require("views/header.php"); ?>


<section class="contactUs">

    <div class="contactForm">
        <h2>¿Tienes alguna pregunta?</h2>
        <p id="subtitulo">Ponte en contacto con nosotros.</p>
        <form action="">
            <p>Nombre de usuario: </p><input type="text" required>
            <p>Correo electrónico: </p><input type="text" required>
            <textarea name="" id="" cols="30" rows="10" required></textarea>
            <input type="submit">
        </form>
    </div>
    <div class="contactInfo">
        <h3>También puede contactarnos:</h3>
        <ul>
            <li>Teléfono: +34 999-999-999</li>
            <li>Móvil: +34 666-666-666</li>
            <li>E-mail: <a href="mailto:carniceria_maruja@hotmail.com">carniceria_maruja@hotmail.com</a></li>
        </ul>
        <h3>Dirección:</h3>
        <address>
            <p>Calle Cueto</p>
            <p>11</p>
            <p>El Rubio 41568 (Sevilla)</p>
        </address>
    </div>

    <div class="scheduleInfo">
        <h3>Horario de Atención</h3>
        <p><strong>Abiertos de</strong></p>
        <p><strong>Lunes a Viernes:</strong> 8:00 - 14:00 y 17:00 - 20:00</p>
        <p><strong>Sábados:</strong> 8:00 - 14:00</p>
    </div>

    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629.2830283336125!2d-4.9851397977929786!3d37.35700865349381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6d5205c5e37fcb%3A0xb2c062e8c76f52cb!2sC.%20Cueto%2C%2011%2C%2041568%20El%20Rubio%2C%20Sevilla!5e0!3m2!1ses!2ses!4v1700830304917!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


<?php require("views/footer.php"); ?>