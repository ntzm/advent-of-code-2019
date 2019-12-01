<?php declare(strict_types=1);

echo array_sum(array_map(static function (string $line): float {
    return floor(((int) $line) / 3) - 2;
}, file(__DIR__ . '/input.txt'))) . PHP_EOL;
