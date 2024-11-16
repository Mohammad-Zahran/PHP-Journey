<?php

function Merge(&$a, $start, $middle, $end) {
    $n1 = $middle - $start + 1;
    $n2 = $end - $middle;

    $LeftArray = [];
    $RightArray = [];

    for ($i = 0; $i < $n1; $i++)
        $LeftArray[$i] = $a[$start + $i];
    for ($j = 0; $j < $n2; $j++)
        $RightArray[$j] = $a[$middle + 1 + $j];

    $i = 0;
    $j = 0;
    $k = $start;

    while ($i < $n1 && $j < $n2) {
        if ($LeftArray[$i] <= $RightArray[$j]) {
            $a[$k] = $LeftArray[$i];
            $i++;
        } else {
            $a[$k] = $RightArray[$j];
            $j++;
        }
        $k++;
    }

    while ($i < $n1) {
        $a[$k] = $LeftArray[$i];
        $i++;
        $k++;
    }

    while ($j < $n2) {
        $a[$k] = $RightArray[$j];
        $j++;
        $k++;
    }
}

function MergeSort(&$a, $start, $end) {
    if ($start < $end) {
        $middle = (int)(($start + $end) / 2);

        MergeSort($a, $start, $middle);
        MergeSort($a, $middle + 1, $end);

        Merge($a, $start, $middle, $end);
    }
}

$array = [12, 31, 25, 8, 32, 17, 40, 42];
echo "Original Array:\n";
print_r($array);

MergeSort($array, 0, count($array) - 1);

echo "Sorted Array:\n";
print_r($array);
