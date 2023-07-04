<style>
    #carrito {
      display: none;
      position: fixed;
      top: 50px;
      right: 50px;
      background-color: white;
      padding: 10px;
      
    }

    #toggleCarrito {
      position: fixed;
      top: 10px;
      right: 10px;
      font-size: 24px;
      background-color: transparent;
      border: none;
      color: black;
      cursor: pointer;

    }
     .carrito-de-compra {
      display: none;
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: white;
      padding: 10px;
    }
    .carrito-de-compra {
      display: none;
    }
  .products-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
  grid-gap: 10px; /* ajusta el espacio entre los elementos según tus necesidades */
}
body {
  margin: 0;
  padding: 0;
  text-transform: uppercase;
}

.top {
  background-color: #8B0000;
  height: 20%;
  color: black;
}

body {
  background-color: yellow;
  height: 70%;
  color: black;
}

</style>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <title>Catálogo de productos electrónicos</title>
    <style>
        /* Estilos */
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }

        .product h2 {
            margin-top: 0;
        }

        .product button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .cart {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <br>
    
        <div class="top">
    <a href="p5.php"></a>
    <h1>lista de herramientas</h1>
<br>
<br>
    
             <div class="product">
            <h2>alicate</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2015/11/07/15/10/pliers-1031962_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>alicate regular</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">regular </label>
        <input type="text" name="producto" value="alicate" required><br>

        <label for="precio">Precio: $5.00 </label>
        <input type="checkbox" name="precio" value="5.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>pinza de punta</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2015/11/07/15/13/pliers-1031968_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>pinza de punta regular</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">pinza de </label>
        <input type="text" name="producto" value="punta" required><br>

        <label for="precio">Precio: $7.00 </label>
        <input type="checkbox" name="precio" value="7.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>destornillador de estrella</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2012/04/13/21/06/screwdriver-33634_1280.png" border= 5

width= 200 height=200>
<br>
            <p>destornillador de estrella regular</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">destornillador de </label>
        <input type="text" name="producto" value="estrella" required><br>

        <label for="precio">Precio: $3.00 </label>
        <input type="checkbox" name="precio" value="3.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>pinza de corte</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2015/11/07/15/15/pliers-1031974_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>pinza de corte regular</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">pinza de </label>
        <input type="text" name="producto" value="corte" required><br>

        <label for="precio">Precio: $5.00 </label>
        <input type="checkbox" name="precio" value="5.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>llaves de paso de agua</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2021/03/14/17/44/stopcock-6094953_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>llave de paso por unidad</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">llave de</label>
        <input type="text" name="producto" value="paso" required><br>

        <label for="precio">Precio: $1.00 </label>
        <input type="checkbox" name="precio" value="1.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>pegamento PVC</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2014/04/02/10/41/glue-304256_1280.png" border= 5

width= 200 height=200>
<br>
            <p>pegamento PVC regular</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">pegamento </label>
        <input type="text" name="producto" value="PVC" required><br>

        <label for="precio">Precio: $3.00 </label>
        <input type="checkbox" name="precio" value="3.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>teflon</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2022/09/20/18/42/scotch-tape-7468527_1280.png" border= 5

width= 200 height=200>
<br>
            <p>teflon regular</p>
            <form id="addToCartForm" action="productos1.php" method="post">
                <label for="producto">regular</label>
        <input type="text" name="producto" value="teflon" required><br>

        <label for="precio">Precio: $1.00 </label>
        <input type="checkbox" name="precio" value="1.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
        </div>
         
         
         </div>

  

    <script>
        // Función para agregar productos al carrito
        function addToCart(productName) {
            var cartItems = document.getElementById('cart-items');
            var li = document.createElement('li');
            li.textContent = productName;
            cartItems.appendChild(li);
        }

        // Función para finalizar la compra
        function checkout() {
            var cartItems = document.getElementById('cart-items');
            cartItems.innerHTML = '';
            alert('¡Gracias por tu compra!');
        }
    </script>
    
    
  


<?php

// Agregar un producto al carrito con las variables
if(isset($_POST['agregar'])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Crear un arreglo asociativo para almacenar el producto
    $item = array(
        'producto' => $producto,
        'precio' => $precio,
        'cantidad' => $cantidad
    );

    // Agregar el producto al carrito
    $_SESSION['carrito'][] = $item;
}

// Eliminar un producto del carrito
if(isset($_GET['eliminar'])) {
    $indice = $_GET['eliminar'];
    if(isset($_SESSION['carrito'][$indice])) {
        unset($_SESSION['carrito'][$indice]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexar el arreglo
    }
}

// Vaciar el carrito
if(isset($_GET['vaciar'])) {
    unset($_SESSION['carrito']);

}

?>
<img id="toggleCarrito" src="carrito.jpg" width= 150 height=150 alt="Mostrar/Ocultar Carrito">
<div id="carrito" class="carrito-de-compra">
<div class="cart">
    <h2>Carrito de compras</h2>

<?php
    // Mostrar los productos en el carrito
    if(isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
        echo '<table>';
        echo '<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th></th></tr>';

        $total = 0;
        $total2 =0;

         foreach($_SESSION['carrito'] as $indice => $item) {
            echo '<tr>';
            echo '<td>'.$item['producto'].'</td>';
            echo '<td>'.$item['precio'].'</td>';
            echo "\n".'<td>'.$item['cantidad'].'</td>';
            echo '<td><a href="productos1.php?eliminar='.$indice.'">Eliminar</a></td>';
            echo '</tr>';

            $total += $item['precio'];
            $total2 += $item['cantidad'];
        }
        if($item['cantidad']>=2) {
        
    $total=0;
    $total=$item['precio']*$total2;
    echo '<tr><td colspan="4"><strong>Total: $'.$total.'  :     '.$total2.'</strong></td></tr>';
        echo '</table>';
        $_SESSION['total'] = $total;
} 
elseif ($item['cantidad']<=1) {
     $total=0;
    $total=$item['precio']*$total2;
        echo '<tr><td colspan="4"><strong>Total: $'.$total.'  :     '.$total2.'</strong></td></tr>';
        echo '</table>';
        $_SESSION['total'] = $total;
}

    
     }else {
        echo 'El carrito está vacío.';
}
  
  

       
    

    ?>
     

  
    <form action="p5.php" method="POST">

  <input type="text" name="nombre_tarjeta" placeholder="Nombre del titular de la tarjeta" required>
  <input type="text" name="numero_tarjeta" placeholder="Número de tarjeta" required>
  <input type="text" name="mes_expiracion" placeholder="Mes de expiración" required>
  <input type="text" name="anio_expiracion" placeholder="Año de expiración" required>
  <input type="text" name="cvc" placeholder="CVC" required>
     <label for="realizar">pago </label>
        <input type="checkbox" name="realizar" value="1" checked><br>
<button type="submit" name="realizar1" onclick="checkout() ">Finalizar compra</button> 
<p><a href="productos1.php?vaciar=1">Vaciar carrito</a></p>

</form>
</div>
<script>
function checkout() {
  window.location.href = "p5.php";
}

</script>
</div>
    <br>


    <script src="script.js"></script>
 
</body>
</html>
