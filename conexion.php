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
    echo "<br>"."ID: " . $row['id_empleado'] . ", nombre: " . $row['nombre'] . "<br>";
}


// Cerrar conexión
odbc_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Tablas</title>
</head>
<body>
	<?php
$connection = odbc_connect("mina_php", "", "");
if (!$connection) {
    die("Error al conectar a la base de datos");
}
$campo1 = $_POST['id_cliente'];
$campo2 = $_POST['id_proveedor'];

// Validar y sanitizar los datos
$campo1 = htmlspecialchars($campo1);
$campo2 = htmlspecialchars($campo2);
$query = "INSERT INTO compras (id_cliente,id_proveedor) VALUES ('$campo1', '$campo2')";
$result = odbc_exec($connection, $query);
if (!$result) {
    die("Error al insertar los datos");
}
odbc_close($connection);

?>
    <h1>Consulta de Tablas</h1>
    <form action="conexion.php" method="post">
Ingrese id de proveedor:
<input type="text" name="id_proveedor"><br>
Ingrese id de cliente:
<input type="text" name="id_cliente"><br>
<br>
<input type="submit" value="Registrar">
</form>
</body>
</html>


