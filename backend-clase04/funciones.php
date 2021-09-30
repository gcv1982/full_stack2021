<?php

function nombre_funcion(){
    echo 'Escribo algo';
    
}
nombre_funcion();


function otra_funcion(){
$a = 10;
$b = 20;
$r = $a + $b;
return $r;



}
$v = otra_funcion();
echo 'La suma dió'.$v;


function funcion3(){
    $array = [1,2,3];
    return $array;

}

$variable1 = 250;
function func4(){
    $variable1 = 360;
    return $variable1;
}

echo $variable1. ' '.func4();
echo '<br><br><br>';


//-- trabajamos con parámetros
function func5($a, $b = 30){
    return $a + $b;
}
echo func5(5, 100);
