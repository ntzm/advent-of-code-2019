<?php declare(strict_types=1);

const OPCODE_ADD = 1;
const OPCODE_MUL = 2;
const OPCODE_DIE = 99;

function run(array $opcodes): int {
    $opcodeCount = count($opcodes);

    for ($i = 0; $i < $opcodeCount; $i += 4) {
        $opcode = $opcodes[$i];

        if ($opcode === OPCODE_DIE) {
            return $opcodes[0];
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

        throw new Exception("Unknown opcode {$opcode}\n");
    }
}
