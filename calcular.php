<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

$resultado;

if($op == "+"){

  $resultado =  $n1 + $n2 ;

} elseif ($op == "-") {

  $resultado =  $n1 - $n2 ;

} elseif ($op == "/") {

  $resultado =  $n1 / $n2 ;

}elseif ($op == "*") {

  $resultado =  $n1 * $n2 ;

}

echo();



