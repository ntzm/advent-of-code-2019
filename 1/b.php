<?php declare(strict_types=1);

function calculate_fuel($mass): float {
    $fuel = floor((float) $mass / 3) - 2;

    if ($fuel > 0) {
        return $fuel + calculate_fuel($fuel);
    }

    return 0;
}

echo array_sum(array_map('calculate_fuel', file(__DIR__ . '/input.txt'))) . PHP_EOL;
