<?php require("views/header.php"); ?>

<section id="hero">
    
    <video src="static/video/video_fondo.mp4" autoplay muted loop></video>
    <div>
            <h1>Carniceria Maruja</h1>
            <p>Tu carniceria de confianza</p>
            <a href="signup.php" id="btnRegistro">Registrate</a>
        
    </div>

</section>



<div class=cabecera>
    <h1>OFERTAS Y ESPECIALES</h1>
</div>

<section id=ofertas>
   
    <figure>
            <img src="static/img/hamburguesa.jpg" alt="">
            <figcaption>hamburguesa</figcaption>
            <p>2€/unidad</p>
            <button>Añadir a carrito</button>
        </figure>
       
        <figure> <a href="producto.php">
            <img src="static/img/Morcilla.png" alt="">
            <figcaption>Morcilla</figcaption>
            <p>7.5€/kg</p>
            <button>Añadir a carrito</button>
        </a></figure>

        <figure>
            <img src="static/img/croquetas.jpg" alt="">
            <figcaption>croquetas</figcaption>
            <p>Agotado</p>
            <button>Añadir a carrito</button>
        </figure>





</section>

<div class=cabecera2>
    <h1>Reseñas </h1>
</div>

<section id="reseñas">
        <div class="comentarios">
            <h3>Usuario</h3>
            <p>Las mejores croquetas que he comido nunca</p>
        </div>
        <div class="comentarios">
            <h3>Usuario</h3>
            <p>Siempre compro las morcillas aqui</p>
        </div>
        <div class="comentarios">
            <h3>Usuario</h3>
            <p>Siempre compro las morcillas aqui</p>
        </div>
        <div class="comentarios">
            <h3>Usuario</h3>
            <p>Siempre compro las morcillas aqui</p>
        </div>
        <div class="comentarios">
            <h3>Usuario</h3>
            <p>Siempre compro las morcillas aqui</p>
        </div>
        <div class="comentarios">
            <h3>Usuario</h3>
            <p>Siempre compro las morcillas aqui</p>
        </div>


    </div>

</section>


<div class=cabecera>
    <h1>Info </h1>
</div>


<section id="informacion-tienda">
    <div class="contacto">
        <h2>Contacto</h2>
        <p>Dirección: Calle Cueto 11</p>
        <p>Teléfono: +34 999-999-999</p>
        <p>Móvil: +34 666-666-666</p>
        <p>Email:  carniceria_maruja@hotmail.com</p>
    </div>

    <div class="politicas">
        <h2>Políticas</h2>
        <ul>
            <li><a href=#>Política de Devolución</a></li>
            <li><a href=#>Política de Envío</a></li>
           
        </ul>
    </div>


    <div class="otros-datos">
        <h2>Otros Datos Importantes</h2>
        <p><strong>Abiertos de</strong></p>
        <p><strong>Lunes a Viernes:</strong> 8:00 - 14:00 y 17:00 - 20:00</p>
        <p><strong>Sábados:</strong> 8:00 - 14:00</p>

    </div>
</section>
<?php require("views/footer.php"); ?>