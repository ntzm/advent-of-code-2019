<?php declare(strict_types=1);

require __DIR__ . '/run.php';

$opcodes = array_map('intval', explode(',', file_get_contents(__DIR__ . '/input.txt')));
$opcodes[1] = 12;
$opcodes[2] = 2;

echo run($opcodes) . PHP_EOL;
