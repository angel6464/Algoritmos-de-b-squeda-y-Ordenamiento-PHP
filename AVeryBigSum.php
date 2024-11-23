<?php
function aVeryBigSum($ar) {
    return array_sum($ar);
}

// Ejemplo 
$n = 5;
$ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
echo aVeryBigSum($ar); // Salida: 5000000015
?>
