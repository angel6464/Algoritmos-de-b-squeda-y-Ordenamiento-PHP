<?php

function birthdayCakeCandles($candles) {
    // Encuentra la altura máxima de las velas
    $maxHeight = max($candles);

    // Cuenta cuántas velas tienen la altura máxima
    $count = 0;
    foreach ($candles as $candle) {
        if ($candle == $maxHeight) {
            $count++;
        }
    }

    return $count;
}

// Ejemplo de entrada
$n = 4;
$candles = [6, 2, 1, 6];

// Llama a la función y muestra el resultado
echo birthdayCakeCandles($candles);

?>
