<?php declare(strict_types=1);

require __DIR__ . '/run.php';

$opcodes = array_map('intval', explode(',', file_get_contents(__DIR__ . '/input.txt')));

for ($noun = 0; $noun <= 99; ++$noun) {
    for ($verb = 0; $verb <= 99; ++$verb) {
        $opcodes[1] = $noun;
        $opcodes[2] = $verb;

        if (run($opcodes) === 19690720) {
            die((100 * $noun + $verb) . PHP_EOL);
        }
    }
}
