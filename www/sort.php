<?php
function shellsort($arr)
{
    $n = count($arr);
    
    for ($gap = (int)($n / 2); $gap > 0; $gap = (int)($gap / 2)) {
        for ($i = $gap; $i < $n; $i++) {
            $temp = $arr[$i];
            $j = $i;
            while ($j >= $gap && $arr[$j - $gap] > $temp) {
                $arr[$j] = $arr[$j - $gap];
                $j -= $gap;
            }
            $arr[$j] = $temp;
        }
    }
    
    return $arr;
}

if (isset($_GET['arr'])) {
    $arr = explode(",", $_GET['arr']);
    $arr = array_map('intval', $arr);
    $sorted = shellsort($arr);

    echo "<h1>Отсортированный массив</h1>";
    echo implode(", ", $sorted);
} else {
    echo "Передайте массив в виде ?arr=5,2,9,1";
}
?>