<?php
function mergeSort($arr) {
    if (count($arr) <= 1) return $arr;
    $mid = floor(count($arr) / 2);
    $left = mergeSort(array_slice($arr, 0, $mid));
    $right = mergeSort(array_slice($arr, $mid));
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];
    while (count($left) > 0 && count($right) > 0) {
        $result[] = $left[0] <= $right[0] ? array_shift($left) : array_shift($right);
    }
    return array_merge($result, $left, $right);
}

// Ejemplo
$arr = [38, 27, 43, 3, 9, 82, 10];
$sorted = mergeSort($arr);
print_r($sorted);
?>
