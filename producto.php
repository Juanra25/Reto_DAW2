<?php require("views/header.php"); ?>

<section id="producto">
       
        <article id="productoInfo">
            <img src="static/img/Morcilla.png" alt="Imagen del Producto">
            <!--Selector de producto -->
            <div>
            <label for="productoSelector">Selecciona un tipo de morcilla    :</label>
                <select id="productoSelector" onchange="cambiarProducto()">
                    <option value="negra">negra</option>
                    <option value="blanca">blanca</option>
                    <option value="lomo">lomo</option>
                    <option value="amarilla">amarilla</option>
                </select>
                <!--Parte del producto que cambia -->
                <h1 id="productoNombre">Morcilla negra</h1>
                <p id="productoDescripcion">Morcilla negra clasica, cocida y lista para comer o para cocinar en distintos platos</p>
                <p id="productoPrecio">Precio: 7.5€/kg</p>
                <button>Añadir al Carrito</button>
            </div>
        </article>
</section>

  


<?php require("views/footer.php"); ?>