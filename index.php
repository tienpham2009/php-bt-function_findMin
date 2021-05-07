<?php

function findMin($arr){
    $min = $arr[0];

    for ($i = 0 ; $i < count($arr) ; $i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    print_r($min .' la so nho nhat trong mang ');
}

$arr = [0,2,3,4,5,6];

findMin($arr);