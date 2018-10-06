<?php

class NumberFunctions
{
    public function arrayEven($arr)
    {
        $even = [];
        foreach ($arr as $a) {
            if ($a % 2 === 0) {
                $even[] = $a;
            }
        }
        return $even;
    }

    public function arraySquare($arr)
    {
        $square = [];
        foreach ($arr as $a) {
            $square[] = $a * $a;
        }
        return $square;
    }
}

function arrayMultiply($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array = new NumberFunctions();

//2.1
$arrayMultiply = array_reduce($arr, "arrayMultiply", 1);
echo $arrayMultiply . PHP_EOL;

//2.2
$arrayEven = $array->arrayEven($arr);
print_r($arrayEven);

//2.3
$arraySquare = $array->arraySquare($arr);
print_r($arraySquare);