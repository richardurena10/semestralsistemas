var btnToggleCarrito = document.getElementById('toggleCarrito');
var carritoDiv = document.getElementById('carrito');

btnToggleCarrito.addEventListener('click', function() {
  if (carritoDiv.style.display === 'none') {
    carritoDiv.style.display = 'block';
  } else {
    carritoDiv.style.display = 'none';
  }
});