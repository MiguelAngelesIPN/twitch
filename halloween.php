<?php
// Configurar la zona horaria a Ciudad de México
date_default_timezone_set('America/Mexico_City');

// Obtener la fecha actual
$fecha_actual = new DateTime();

// Definir la fecha de Navidad
$halloween = new DateTime('October 31');

// Calcular la diferencia entre la fecha actual y Navidad
$diferencia = $halloween->diff($fecha_actual);

// Verificar si Navidad ya pasó este año
if ($fecha_actual > $halloween) {
    // Si la fecha actual es después del 31 de octubre, calculamos la fecha de halloween del próximo año
    $halloween->modify('+1 year');
    $diferencia = $halloween->diff($fecha_actual);
}

// Mostrar los días faltantes
echo "Faltan " . $diferencia->days . " días para Halloween.";
?>
