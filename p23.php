<?php
$archivo = 'comprasregistro.txt';

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    
    if (!empty($contenido)) {
        echo "<h1>compras registradas:</h1>";
        echo "<pre>$contenido</pre>";
    } else {
        echo "<h1>No se han registrado quejas</h1>";
    }
} else {
    echo "<h1>No se encontró el archivo de quejas</h1>" ;
}