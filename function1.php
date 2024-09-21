<?php
function saludoBienvenida($nombre) {
    return "¡Bienvenido, " . htmlspecialchars($nombre) . "!";
}

// Ejemplo de uso
$nombreUsuario = "Juan";
echo saludoBienvenida($nombreUsuario);
?>
