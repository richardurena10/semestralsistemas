<?php
session_start();
?>
<!DOCTYPE html> 
<html lang="es-ES"> 
	<head> 
	<meta charset="utf-8"> 
		<title>FERRETERIA LA MINA</title> 
	<link rel="stylesheet" href="estilos.css"> 
	</head> 
	<style type="text/css"></style>
	<body> 

		<center><h1 style="background-color:#FFFF00;"><div align="center"><img src="Ferreteria.jpg" width="122">FERRETERIA LA MINA</h1></center>
		<p>
			<meta charset="utf-8">

			<ul class="menu">
				<li><a href="index.php"><strong>INICIO</strong></a></li>
				<li><a href="Formulario del cliente.html"><strong>DATOS DEL CLIENTE</strong></a></li>
				<li><a href="Acerca de mi tienda de la ferreteria.html"><strong>SOBRE NOSOTROS</strong></a></li>
			</ul>
		</p>
		
		<blockquote><h3 style="background-color: #FFFF00;">.</h3></blockquote>
			<style>
        body {
  margin: 0;
  padding: 0;
  text-transform: uppercase;
}
				#carrito {
      display: none;
      position: fixed;
      top: 50px;
      right: 50px;
      background-color: red;
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
				.products-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(400px, 1fr));
  grid-gap: 10px; /* ajusta el espacio entre los elementos según tus necesidades */
}
			body {background-color: #8B0000;}
			p, li, td {color:#ffffff; font-size:30px;} 
			a {color:black; font-size:24px;}
			h2 {color:#000; font-size:40px;} 
			ul {font-family: courier;}
			ul{color:000; font-size:24}
			.menu{
	list-style: none;
	padding: 0;
	background: #FFFFFF;
	width: 90%;
	max-width: 1000px;
	margin: auto;
}

.menu li a{
	text-decoration: none;
	color: black;
	padding: 20px;
	display: block;
}

.menu li{
	display: inline-block;
	text-align: center;
}

.menu li a:hover{
	background:#ef8354 ;
}
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

.wrap{
	max-width: 1100px;
	width: 90%;
	margin: auto;
}

.wrap > h1{
	color: #FFFFFF;
	font-weight: 400;
	display: flex;
	flex-direction: column;
	text-align: center;
	margin: 15px 0px;
}

.wrap > h1:after{
	content: '';
	width: 100%;
	height: 5px;
	background: #FFFFFF;
	margin: 20px 0;
}

.store-wrapper{
	display: flex;
	flex-wrap: wrap;

}

.category_list{
	display: flex;
	flex-direction: column;
	width: 18%;
}

.category_list .category_item{
	display: block;
	width: 90%;
	padding: 15px 0;
	margin-bottom: 20px;
	background: #E84C3D;

	text-align: center;
	text-decoration: none;
	color: #fff;
}

.category_list .ct_item-active{
	background: #2D3E50;
}

/* PRODUCTOS ============*/

.products-list{
	width: 82%;
	display: flex;
	flex-wrap: wrap;
}


.products-list .product-item{
	width: 22%;
	margin-left: 3%;
	margin-bottom: 25px;
	box-shadow: 0px 0px 6px 0px rgba(0,0,0,0.22);

	display: flex;
	flex-direction: column;
	align-items: center;
	align-self: flex-start;

	transition: all .4s;
}

.products-list .product-item img{
	width: 100%;
}

.products-list .product-item a{
	display: block;
	width: 100%;
	padding: 8px 0;
	background: #FFFF00;

	color: #000000;
	text-align: center;
	text-decoration: none;
}

/* RESPONSIVE */

@media screen and (max-width: 1100px){
	.products-list .product-item{
		width: 30.3%;
	}
}

@media screen and (max-width: 900px){
	.category_list,
	.products-list{
		width: 100%;
	}

	.category_list{
		flex-direction: row;
		justify-content: space-between;
	}

	.category_list .category_item{
		align-self: flex-start;
		width: 15%;
		font-size: 14px;
	}

	.products-list .product-item{
		margin-left: 4.5%;
	}

	.products-list .product-item:nth-child(3n+1){
		margin-left: 0px;
	}
}

@media screen and (max-width: 700px){
	.category_list{
		flex-direction: column;
	}
	.category_list .category_item{
		width: 100%;
		margin-bottom: 10px;
	}
}

@media screen and (max-width: 600px){

	.products-list .product-item{
		width: 47.5%;
	}

	.products-list .product-item:nth-child(3n+1){
		margin-left: 4.5%;
	}

	.products-list .product-item:nth-child(2n+1){
		margin-left: 0px;
	}

}

@media screen and (max-width: 350px){
	.products-list .product_item{
		width: 100%;
		margin-left: 0px;
	}
}
.products-list {
  display: grid;
  grid-template-columns: repeat(2, minmax(400px, 1fr));
  grid-gap: 10px; /* ajusta el espacio entre los elementos según tus necesidades */
}
		</style>
	<p>
		<blockquote>
		<body>
	
	<div class="wrap">
		<h1>Escoge un producto</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="productos.php" class="category_item" category="laptops">Todo</a>
				<a href="productos1.php" class="category_item" category="ordenadores">Herramientas</a>
				<a href="productos2.php" class="category_item" category="laptops">Materiales de construcción</a>
			</div>
			
				<section class="products-list">
					<div class="top">
    <a href="p5.php"></a>
    <h1>lista de materiales de construccion</h1>
<br>
<br>
    <div class="products-list">
        <div class="product">
            <h2>cemento</h2>
            <IMG SRC="https://media.istockphoto.com/id/1448349078/es/foto/bolsas-de-cemento-o-sacos-aislados-sobre-blanco.jpg?s=1024x1024&w=is&k=20&c=KLWAWeM635A2GwadbRjoIZzFihcdfZyOOwjrgz_jQQM=" border= 5

width= 200 height=200>
<br>
            <p>bolsas de cemento por unidad</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">bolsas de</label>
        <input type="text" name="producto" value="cemento" required><br>

        <label for="precio">Precio: $13.00 </label>
        <input type="checkbox" name="precio" value="13.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

        </div>

        <div class="product">
            <h2>bolsas de arena</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2020/04/11/15/15/bags-5030805_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>yarda de arena</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">yarda de</label>
        <input type="text" name="producto" value="arena" required><br>

        <label for="precio">Precio: $10.00 </label>
        <input type="checkbox" name="precio" value="10.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

            
        </div>

        <div class="product">
            <h2>piedras</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2017/10/02/13/04/gravel-2808793_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>piedras por yarda</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">yarda de </label>
        <input type="text" name="producto" value="piedras" required><br>

        <label for="precio">Precio: $8.00 </label>
        <input type="checkbox" name="precio" value="8.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>

<div class="product">
            <h2>bloques</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2019/04/17/08/37/blocks-4133619_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>bloques por unidad</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">regulares</label>
        <input type="text" name="producto" value="bloques" required><br>

        <label for="precio">Precio: $1.00 </label>
        <input type="checkbox" name="precio" value="1.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>varillas de acero</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2014/10/05/08/17/iron-rods-474800_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>varillas de acero por metro</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">varillas de </label>
        <input type="text" name="producto" value="acero" required><br>

        <label for="precio">Precio: $2.00 </label>
        <input type="checkbox" name="precio" value="2.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>clavos</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2015/09/24/14/49/nails-955731_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>clavos por libra</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">libra de </label>
        <input type="text" name="producto" value="clavos" required><br>

        <label for="precio">Precio: $2.00 </label>
        <input type="checkbox" name="precio" value="2.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>pintura</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2016/09/02/15/00/paint-1639468_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>pintura regular</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">regular </label>
        <input type="text" name="producto" value="pintura" required><br>

        <label for="precio">Precio: $10.00 </label>
        <input type="checkbox" name="precio" value="10.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>alambre dulce</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2019/04/17/08/26/wiring-4133607_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>alambre dulce por libra</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">alambre </label>
        <input type="text" name="producto" value="dulce" required><br>

        <label for="precio">Precio: $2.00 </label>
        <input type="checkbox" name="precio" value="2.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>tuberia de agua</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2012/12/27/19/40/green-72772_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>tuberia de agua 20 pies</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">tuberia de </label>
        <input type="text" name="producto" value="agua" required><br>

        <label for="precio">Precio: $2.00 </label>
        <input type="checkbox" name="precio" value="2.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>tuberia de electricidad</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2019/08/22/15/33/electricity-4423821_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>tuberia de electricidad 20 pies</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">tuberia de </label>
        <input type="text" name="producto" value="electricidad" required><br>

        <label for="precio">Precio: $2.00 </label>
        <input type="checkbox" name="precio" value="2.00" checked><br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required><br>

  <button type="submit" name="agregar" onclick="addToCart(event)">Agregar al carrito</button>
</form>

             </div>
             <div class="product">
            <h2>madera</h2>
            <IMG SRC="https://cdn.pixabay.com/photo/2015/08/06/03/27/wood-877368_1280.jpg" border= 5

width= 200 height=200>
<br>
            <p>tablones de madera por pieza</p>
            <form id="addToCartForm" action="index.php" method="post">
                <label for="producto">tablones de </label>
        <input type="text" name="producto" value="madera" required><br>

        <label for="precio">Precio: $20.00 </label>
        <input type="checkbox" name="precio" value="20.00" checked><br>

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
            echo '<td><a href="index.php?eliminar='.$indice.'">Eliminar</a></td>';
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
<p><a href="index.php?vaciar=1">Vaciar carrito</a></p>

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
	     			<blockquote><img src="instagram.jpg" width="30" height="30" align="left"/><h3 style="background-color: #FFFF00;">@ferreteria_la_mina</h3></blockquote>
	     			
	     			<blockquote><img src="facebook.jpg" width="30" height="30" align="left"/><h3 style="background-color: #FFFF00;">@ferreteria_lamina</h3></blockquote>

	     			<blockquote><img src="twitter.jpg" width="30" height="30" align="left"/><h3 style="background-color: #FFFF00;">@ferreteria_lamina</h3></blockquote>
            <p>nota: sitio web de caracter educativo es una simulacion</p>
	</body> 
</html>



















