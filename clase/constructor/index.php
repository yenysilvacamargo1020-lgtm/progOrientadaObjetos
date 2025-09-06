<?php
require_once 'carro.php';
//$carro =new Carro();
$carro1 = new Carro("amarillo","ferrari","gallardo",500,200,2);
$carro2 = new Carro("lila","lamborginni","alpha",1500,200,2);
$carro3 = new Carro("negro","audi","A5",1200,200,4);
$carro4 = new Carro("rosa","mercedes","clase a",500,200,2);
var_dump ($carro1);
var_dump ($carro2);
var_dump ($carro3);
var_dump ($carro4);