<?php

function minimumNumber($n, $password) {
    $types = [
        "0123456789", 
        "abcdefghijklmnopqrstuvwxyz", 
        "ABCDEFGHIJKLMNOPQRSTUVWXYZ", 
        "!@#$%^&*()-+"
    ];

    $missingTypes = 0;
    foreach ($types as $set) {
        if (!preg_match('/[' . preg_quote($set, '/') . ']/', $password)) {
            $missingTypes++;
        }
    }

    return max($missingTypes, 6 - $n);
}

// Ejemplo de uso
echo minimumNumber(3, "3Ab1") . PHP_EOL; // Salida: 3
echo "<br>";
echo minimumNumber(11, "#RankingHacker") . PHP_EOL; // Salida: 1

?>
