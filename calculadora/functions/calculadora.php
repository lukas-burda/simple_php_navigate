<?php

function somar ($num1, $num2){
return $num1 + $num2;
}

function substrair ($num1, $num2){
    return $num1 - $num2;
}

function dividir ($num1, $num2){
    $result = $num1;
    while($result> 0){
        $result = $result - $num2;
        $cont++;
    }
    return $num1 / $num2;
}

function multiplicar ($num1, $num2){
    $result = 0;
    for ($i = 1; $i <= $num1; $i++) {
        $result = $num2+$result;
    }
    return $result;
}
?>