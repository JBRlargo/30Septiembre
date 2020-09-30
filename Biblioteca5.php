<?php

function generaArrayInt($tamanio, $minimo, $maximo){
    $array= array();
    for ($i=0; $i < $tamanio; $i++) { 
        $array[$i]=random_int($minimo, $maximo);
    }
    return $array;
}

function minimoArrayInt($array){
    $minimo;
    for ($i=0; $i < count($array); $i++) { 
        if($i!=0){
            if($array[$i]<$minimo){
                $minimo=$array[$i];
            }
        }else{
            $minimo=$array[$i];
        }
    }
    return $minimo;
}

function estaEnArrayInt($array, $numero){
    $i=0;
    $encuentra=false;
    do{
        if($array[$i]==$numero){
            $encuentra=true;
        }
        $i++;
    }while($i<count($array) && !$encuentra);
    return $encuentra;
}
?>