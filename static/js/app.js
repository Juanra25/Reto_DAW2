function cambiarProducto() {
    var selector = document.getElementById("productoSelector");
    var nombre = document.getElementById("productoNombre");
    var descripcion = document.getElementById("productoDescripcion");
    var precio = document.getElementById("productoPrecio");

    // Cambiar la información según la opción seleccionada
    if (selector.value === "negra") {
     
        nombre.textContent = "Morcilla Negra";
        descripcion.textContent = "Morcilla negra clasica, cocida y lista para comer o para cocinar en distintos platos";
        precio.textContent = "Precio: 7,5€/kg";
    } else if (selector.value === "blanca") {
      
        nombre.textContent = "Morcilla Blanca";
        descripcion.textContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.";
        precio.textContent = "Precio: 7,5€/kg";
    } else if (selector.value === "amarilla") {
       
        nombre.textContent = "Morcilla Amarilla";
        descripcion.textContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.";
        precio.textContent = "Precio: 8,5€/kg";
    }
    else if (selector.value === "lomo") {
      
        nombre.textContent = "Morcilla Lomo";
        descripcion.textContent = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.";
        precio.textContent = "Precio: 7,5€/kg";
    } 
}




const productosAgotados = document.querySelectorAll('p');

productosAgotados.forEach(function (agotadoElement) {
    const botonAsociado = agotadoElement.nextElementSibling;

    if (agotadoElement.textContent.toLowerCase() === 'agotado' && botonAsociado) {
    botonAsociado.style.display = 'none';
    }
});



document.addEventListener("DOMContentLoaded", function() {
const formularioBusqueda = document.querySelector(".busqueda form");
formularioBusqueda.addEventListener("submit", function(event){
    event.preventDefault();
    const nombreProducto = document.querySelectorAll('figcaption');
    const buscar = document.getElementById('search').value.toLowerCase(); 

    nombreProducto.forEach(function (encontrarProducto) {
        const texto = encontrarProducto.textContent.toLowerCase();
        const figura = encontrarProducto.closest("figure");
        if (buscar === '' || texto.includes(buscar)) {
            figura.hidden=false;
        } else {
            figura.hidden = true; 
        }
    });
})});



var mostrarProductos = document.getElementById('showProducts');
var tablaProductos = document.getElementById('productTable');

mostrarProductos.addEventListener('click', function(){
    tablaProductos.classList.toggle('hidden');
});

var mostrarPedidos = document.getElementById('showOrders');
var tablaPedidos = document.getElementById('orderTable');

mostrarPedidos.addEventListener('click', function(){
    tablaPedidos.classList.toggle('hidden');
});

var botonesEdit = document.querySelectorAll('.edit');
var dialogoModal = document.getElementById('editProductForm');
var botonGuardar = document.getElementById('saveProductChanges');

function openDialog(){
    dialogoModal.showModal();
}
botonesEdit.forEach(function(boton){
    boton.addEventListener('click',openDialog);
});


botonGuardar.addEventListener('click', function(){
    dialogoModal.close();
});

var loginButton = document.getElementById('login');
var productoSeccion = document.querySelector('.products')
if (productoSeccion){
    loginButton.textContent = "Logout";
}else{
    loginButton.textContent = "Login";
}


