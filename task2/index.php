<?php

declare(strict_types=1);

$cols = 7;
$rows = 5;
$min = 1;
$max = 1000;

$a = fillRandUnique($cols, $rows, $min, $max);
printMatrix($a);
printRowSums($a);
printColSums($a);

function fillRandUnique(int $cols, int $rows, int $min, int $max): array
{
    $a = [];
    $values = [];
    for ($i = 0; $i < $rows; $i++) {
        $a[$i] = [];
        for ($j = 0; $j < $cols; $j++) {
            $value = rand($min, $max);
            while (isset($values[$value])) {
                $value = rand($min, $max);
            }
            $values[$value] = true;
            $a[$i][$j] = $value;
        }
    }
    return $a;
}

function printMatrix(array $a): void
{
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($a[$i]); $j++) {
            echo $a[$i][$j] . " ";
        }
        echo "\n";
    }
    echo "\n";
}

function printRowSums(array $a): void
{
    for ($i = 0; $i < count($a); $i++) {
        $sum = array_sum($a[$i]);
        $rowNum = $i + 1;
        echo "Сумма строки $rowNum: $sum\n";
    }
    echo "\n";
}

function printColSums(array $a): void
{
    for ($j = 0; $j < count($a[0]); $j++) {
        $sum = 0;
        for ($i = 0; $i < count($a); $i++) {
            $sum += $a[$i][$j];
        }
        $colNum = $j + 1;
        echo "Сумма столбца $colNum: $sum\n";
    }
    echo "\n";
}