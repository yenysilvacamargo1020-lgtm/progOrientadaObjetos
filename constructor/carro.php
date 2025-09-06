<?php
class Carro{
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $caballaje;
    public $puestos;


    //public function_construct()
    //{
    //  $this ->color ="rojo";
    //  $this ->marca ="ferrari";
    //  $this ->marca ="gallardo";
    //  $this ->velocidad =500;
    //  $this ->caballaje =300;
    //  $this ->puestos =2;
    //}
    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$puestos)
    {
        $this ->color =$color;
        $this ->marca =$marca;
        $this ->modelo =$modelo;
        $this ->velocidad =$velocidad;
        $this ->caballaje =$caballaje;
        $this ->puestos =$puestos;
    }
}