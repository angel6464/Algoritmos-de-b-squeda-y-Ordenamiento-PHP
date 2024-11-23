<?php

function marsExploration($s) {
    $expected = "SOS";
    $changes = 0;

    // Itera por bloques de 3 caracteres
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] !== $expected[$i % 3]) {
            $changes++;
        }
    }

    return $changes;
}

//
echo marsExploration("SOSSPSSQSSOR") . PHP_EOL; // Salida: 3
echo marsExploration("SOSOT") . PHP_EOL;        // Salida: 1
echo marsExploration("SOSSOSSOS") . PHP_EOL;    // Salida: 0

?>
