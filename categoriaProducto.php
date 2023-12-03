<?php require("views/header.php"); ?>

<section id="categoria_Producto">
    <section class="busqueda">
        <h2>Buscar Productos</h2>
        <form method="get">
            <input type="text" id="search" name="q" placeholder="Escribe aquí...">
            <button type="submit">Buscar</button>
        </form>
    </section>


    <section class="catalogo">
        <h2>Nuestras productos</h2>
        <div>
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

            <figure>
                <img src="static/img/salchichas.jpg" alt="">
                <figcaption>salchichas</figcaption>
                <p>8€/Kg</p>
                <button>Añadir a carrito</button>
                
            </figure>
            <figure>
                <img src="static/img/ham.png" alt="">
                <figcaption>Jamon</figcaption>
                <p>Agotado</p>
                <button>Añadir a carrito</button>
            </figure>

            <figure>
                <img src="static/img/costillas.jpg" alt="">
                <figcaption>Costillas</figcaption>
                <p>8€/kg</p>
                <button>Añadir a carrito</button>
            </figure>

            <figure>
                <img src="static/img/SanJacobo.jpg" alt="">
                <figcaption>San jacobo</figcaption>
                <p >Agotado</p>
                <button>Añadir a carrito</button>
            </figure>

            <figure>
                <img src="static/img/lagrimas.jpg" alt="">
                <figcaption>Lagrimitas de pollo</figcaption>
                <p>8€/Kg</p>
                <button>Añadir a carrito</button>
                
            </figure>
        </div>
    </section>



    <div id="paginas">

        <p>Contenido de la página actual...</p>
    

    <ul class="paginacion">
        <li class="paginacion-item active"><button>1</button></li>
        <li class="paginacion-item"><button>2</button></li>
        <li class="paginacion-item"><button>3</button></li>
        <li class="paginacion-item"><button>4</button></li>
        <li class="paginacion-item"><button>5</button></li>
    </ul>
    </div>

</section>

<?php require("views/footer.php"); ?>