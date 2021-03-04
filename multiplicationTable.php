<?php
ini_set('display_errors', 'On');
ini_set("error_reporting", E_ALL);

function createMultiplicationTable(int $rows = 10, int $cols = 10)
{
    $multiplicationTable = [];

    for ($i = 0; $i <= $rows; $i++) {

        $multiplicationTable[$i] = [];

        for ($j = 0; $j <= $cols; $j++) {

            $multiplicationTable[$i][$j] = [];

            if ($i == 0 and $j == 0) {
                $multiplicationTable[$i][$j]['background'] = '#6B0101';
                $multiplicationTable[$i][$j]['number'] = 0;
                continue;
            }

            if ($i == 0 or $j == 0) {
                $multiplicationTable[$i][$j]['background'] = '#F9CC99';
                $multiplicationTable[$i][$j]['number'] = $i + $j;
            } else {
                $multiplicationTable[$i][$j]['background'] = '#FFFFFF';
                $multiplicationTable[$i][$j]['number'] = $i * $j;
            }

            if ($i === $j)
                $multiplicationTable[$i][$j]['background'] = '#FFFF98';
        }
    }

    return $multiplicationTable;
}
