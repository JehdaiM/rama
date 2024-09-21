<?php
function calcularAreaCirculo($radio) {
    if ($radio < 0) {
        return "El radio no puede ser negativo.";
    }
    $area = pi() * pow($radio, 2);
    return "El área del círculo con radio " . htmlspecialchars($radio) . " es " . round($area, 2) . ".";
}

// Ejemplo de uso
$radioCirculo = 5;
echo calcularAreaCirculo($radioCirculo);
?>
