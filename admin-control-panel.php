<?php require("views/header.php"); ?>
<!-- Hamburguesa, Croqueta, Salchicha, Morcilla, Costillar, Cabezada, Lomo, Ternera, San Jacobos, Flamenquines, Lagrimitas de pollo, Pollo, Hígado, Chorizo, Salchichón, Tocino, Panceta, Jamón, Pavo, Chuleta de cerdo, Callos, Picadillo, Solomillo de Vaca y Solomillo de Cerdo -->
<section class="controlPanel">

    <div class="products">
        <button id="showProducts">Mostrar productos</button>
        <table id="productTable" class="hidden">
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>En stock</th>
                <th>Creación</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Hamburguesa</td>
                <td>Hamburguesa a elegir de pollo, ternera, cerdo o mixta. Hecha de carne picada sin conservantes.</td>
                <td>5.20€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Croqueta</td>
                <td>Croquetas caseras a elegir entre cocido de pollo y jamón o gambas y bacalao.</td>
                <td>5€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Morcilla</td>
                <td>Morcilla a elegir entre diferentes sabores/colores: Negras, blancas, lomo y amarillas.</td>
                <td>7.5€/Kg - 8.5€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Salchicha</td>
                <td>De pollo o cerdo, sin conservantes. Lista para cocinar.</td>
                <td>8€/kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Costillar</td>
                <td>Costillar de cerdo perfecto para barbacoas y asados.</td>
                <td>11€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Chuleta de cabezada</td>
                <td>Cabezada perfectamente preparada para cocinar con poca grasa.</td>
                <td>8€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Lomo de Cerdo</td>
                <td>Filete de lomo de cerdo perfecto para cocinar barbacoas o plancha.</td>
                <td>9€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Ternera</td>
                <td>Carne de ternera perfecta para cocinar en filetes, o taquitos</td>
                <td>15€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>San Jacobos</td>
                <td>De jamón cocido y queso perfecto para una comida rápida y deliciosa (Hay sin lactosa)</td>
                <td>6€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Flamenquines</td>
                <td>Flamenquines de cinta de lomo de cerdo con jamón serrano y queso. Listos para freír</td>
                <td>7.5€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Lagrimitas de Pollo</td>
                <td>Pechuga de pollo cortada en taquitos y bañada en zumo de limón. Una delicia para los más peq
                    u eños de
                    la casa.</td>
                <td>9.5€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Pollo</td>
                <td>Pieza de pollo entero o partido. Elige lo que quieres llevarte a casa.</td>
                <td>8.5€/Kg - 16€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Hígado de Cerdo</td>
                <td>Hígado de cerdo fresco y jugoso. Seleccionado cuidadosamente para garantizar calidad premium.</td>
                <td>5.75€/100g</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Chorizo</td>

                <td>Chorizo de cerdo en tres versiones: normal, picante e ibérico. Se puede comer tanto crudo como
                    cocinado.</td>
                <td>6.5€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Salchichón</td>
                <td>Salchichón curado de cerdo. Ideal para un picoteo</td>
                <td>6€/ud</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Tocino</td>
                <td>Tocino de cerdo muy apropiado para los caldos o pucheros.</td>
                <td>6€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Panceta</td>
                <td>Jugosas lonchas de panceta ahumadas geniales para la barbacoa.</td>
                <td>6€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Jamón</td>
                <td>Carne de cerdo curada, con un sabor intenso y duradero.</td>
                <td>12€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Pavo</td>
                <td>Carne blanca, magra y saludable.</td>
                <td>15€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Chuleta de Cerdo</td>
                <td>Carne de cerdo tierna y jugosa, perfecta para asar a la parrilla o a la plancha.</td>
                <td>10€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Picadillo</td>
                <td>Guiso de carne picada, cebolla, tomate y especias.</td>
                <td>7.5€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Solomillo de Cerdo</td>
                <td>Carne magra, sabrosa y jugosa.</td>
                <td>28€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
            <tr>
                <td><img src="static/img/ham.png" alt="temp"></td>
                <td>Solomillo de Vaca</td>
                <td>Carne magra, sabrosa y jugosa.</td>
                <td>18€/Kg</td>
                <td>99</td>
                <td>1/11/2023</td>
                <td><button class="edit"><img src="static/img/small-pen.png" alt=""></button></td>
                <td><button><img src="static/img/small-trash.png" alt=""></button></td>
            </tr>
        </table>
        <dialog id="editProductForm">
            <form>
                <label for="nombre">Nombre:</label>
                <input type="text">
                <label for="descripcion">Descripción:</label>
                <input type="text">
                <label for="precio">Precio:</label>
                <input type="text">
                <label for="stock">En stock:</label>
                <input type="text">
                <label for="fechaCreacion">Fecha de creación:</label>
                <input type="text">
                <label for="imagen">Cambiar imagen:</label>
                <button>Subir imagen</button>
                <input type="button" id="saveProductChanges" value="Guardar Cambios">
            </form>
        </dialog>
    </div>
    <div class="orders">
        <button id="showOrders">Mostrar pedidos</button>
        <table id="orderTable" class="hidden">
            <tr>
                <th>ID</th>
                <th>DESCRIPCIÓN</th>
                <th>USUARIO</th>
                <th>FECHA</th>
            </tr>
            <tr>
                <td>10001</td>
                <td>Morcillas [negra] x 4, Jamón [pierna] x 1, Pollo [alitas] x 500g</td>
                <td>user1</td>
                <td>25/11/2023</td>
            </tr>
            <tr>
                <td>10002</td>
                <td>Morcillas [negra] x 4, Jamón [pierna] x 1, Pollo [alitas] x 500g</td>
                <td>user2</td>
                <td>26/11/2023</td>
            </tr>
            <tr>
                <td>10003</td>
                <td>Morcillas [negra] x 4, Jamón [pierna] x 1, Pollo [alitas] x 500g</td>
                <td>user3</td>
                <td>27/11/23</td>
            </tr>
            <tr>
                <td>10004</td>
                <td>Morcillas [negra] x 4, Jamón [pierna] x 1, Pollo [alitas] x 500g</td>
                <td>user4</td>
                <td>28/11/2023</td>
            </tr>
        </table>
    </div>
</section>

<?php require("views/footer.php"); ?>