<?php

function applyFunctionToElements($numbers, $callback) {
    $result = [];
    foreach ($numbers as $number) {
        $result[] = $callback($number);
    }
    return $result;
}

// Пример использования функции с анонимной функцией для возведения чисел в квадрат
$numbers = [1, 2, 3, 4, 5];
$squaredNumbers = applyFunctionToElements($numbers, function($x) {
    return $x * $x;
});

print_r($squaredNumbers);
