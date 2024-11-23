<?php
// Incluir elementos comunes
require 'header.php'; // Esencial para la estructura
require 'menu.php';   // Esencial para la navegación

// Determinar la sección a mostrar
$seccion = $_GET['seccion'] ?? 'inicio';
$ruta_contenido = "contenido/$seccion.php";

// Verificar si el archivo de contenido existe
if (file_exists($ruta_contenido)) {
    include $ruta_contenido; // No es crítico, así que usamos include
} else {
    echo "<main><h2>Error 404</h2><p>La sección solicitada no existe.</p></main>";
}

// Incluir el pie de página
require 'footer.php'; // Esencial para cerrar correctamente la estructura HTML
?>
