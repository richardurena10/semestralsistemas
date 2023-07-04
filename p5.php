<?php
$usuario = "";
$contraseña = "";
// Cadena de conexión
$connString ="mina_php";

// Conexión a la base de datos de access
$conn = odbc_connect($connString, $usuario, $contraseña);
if (!$conn) {
    die("Error al conectar con la base de datos: " . odbc_errormsg());
}
// Verificar si la conexión fue exitosa
if ($conn) {
    echo "Conexión exitosa a la base de datos.";
} else {
    echo "Error al conectar a la base de datos.";
}
// Consulta de selección
$query = "SELECT * FROM empleados";

// Ejecutar consulta
$result = odbc_exec($conn, $query);

// Obtener resultados
while ($row = odbc_fetch_array($result)) {
    // Procesar cada fila de resultados
    
}


// Cerrar conexión
odbc_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="productos.php"></a>

<br>
</body>
</html>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el valor del campo de texto del formulario HTML
    $nombre1 = $_POST['nombre_tarjeta'];

    // Hacer lo que quieras con el texto, como guardarlo en una base de datos o mostrarlo en pantalla
    echo "la compra se realizo de manera exitosa : " . $nombre1. "<br>";
}


if (isset($_SESSION['total'])) {
    $total = $_SESSION['total'];
    
} 

if ($_POST['realizar']=1 ) {

    	if ($total<1000){
    		$saldo=1000;
    $saldofinal=$saldo-$total;
    echo "su pago fue exitoso "." saldo actual : ".$saldofinal." saldo anterior : ".$saldo. " total pagado :".$total;
     echo '</table>'; 
 $fechaHora = date('Y-m-d H:i:s');
    
    $archivo = 'comprasregistro.txt';
    
    // Abrir el archivo en modo de escritura
    $archivoHandler = fopen($archivo, 'a');
    
    if ($archivoHandler) {
        // Escribir los datos en el archivo
        fwrite($archivoHandler, "Fecha y hora: $fechaHora" . PHP_EOL);
        fwrite($archivoHandler, "Nombre: $nombre1" . PHP_EOL);
        fwrite($archivoHandler, "total pagado: $total" . PHP_EOL);
        fwrite($archivoHandler, "--------------------------" . PHP_EOL);
        
        // Cerrar el archivo
        fclose($archivoHandler);
        
        echo "<h1>compra guardada con éxito</h1>";
        echo "<a href='p23.php'>Ver todas las compras registradas</a>";
    }
    $connection = odbc_connect("mina_php", "", "");
if (!$connection) {
    die("Error al conectar a la base de datos");
}
$campo1 = 1010;
$campo2 = date('Y-m-d H:i:s');
$campo3 = 1000;
// Validar y sanitizar los datos
$campo1 = htmlspecialchars($campo1);
$campo2 = htmlspecialchars($campo2);
$campo3 = htmlspecialchars($campo3);
$query = "INSERT INTO compras (id_proveedor,fecha,total,id_cliente) VALUES ('$campo1', '$campo2', '$total', '$campo3')";
$result = odbc_exec($connection, $query);
if (!$result) {
    die("Error al insertar los datos");
}
odbc_close($connection);
 }
    	
    else {
        echo "<h1>Error al abrir el archivo</h1>";
    }
    	
  
    }


?>