<?php declare(strict_types=1);

const OPCODE_ADD = 1;
const OPCODE_MUL = 2;
const OPCODE_DIE = 99;

$opcodes = array_map('intval', explode(',', file_get_contents(__DIR__ . '/input.txt')));
$opcodes[1] = 12;
$opcodes[2] = 2;
$opcodeCount = count($opcodes);

for ($i = 0; $i < $opcodeCount; $i += 4) {
    $opcode = $opcodes[$i];

    if ($opcode === OPCODE_DIE) {
        die("{$opcodes[0]}\n");
    }

    if ($opcode === OPCODE_ADD) {
        $value1 = $opcodes[$opcodes[$i + 1]];
        $value2 = $opcodes[$opcodes[$i + 2]];
        $output = $opcodes[$i + 3];

        $opcodes[$output] = $value1 + $value2;

        continue;
    }

    if ($opcode === OPCODE_MUL) {
        $value1 = $opcodes[$opcodes[$i + 1]];
        $value2 = $opcodes[$opcodes[$i + 2]];
        $output = $opcodes[$i + 3];

        $opcodes[$output] = $value1 * $value2;

        continue;
    }

    die("Unknown opcode {$opcode}\n");
}
