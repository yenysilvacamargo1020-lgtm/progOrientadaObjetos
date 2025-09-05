<?php
//clase:molde para crear mas objetos

class carro{
    //atributos o propiedades(variables)
    public $color = 'rojo';
    public $marca = 'ferrari';
    public $modelo = 'aventador';
    public $velocidad = 500;
    public $caballaje = 300;
    public $puestos = 2;

    //metodo-> acciones que hace el carro (funciones)
    public function getColor(){
        return $this -> color;
    }
     public function setColor($color){
        $this -> color = $color;
    }
     public function getVelocidad(){
        return $this -> velocidad;
    }
    public function setVelocidad($velocidad){
        $this ->velocidad = $velocidad;
    }
     public function acelerar(){
        $this -> velocidad++;
    }
     public function frenar(){
        $this -> velocidad--;
    }
   
}
//crear un objeto/intanciar
$carroEspecial = new carro();
//var_dump($carroEspecial);
echo 'la velocidad de mi carro es:'.$carroEspecial ->getVelocidad().'<br>';

echo 'la color de mi carro es:'.$carroEspecial ->getColor().'<br>';

$carroEspecial->setColor ('amarillo');

echo $carroEspecial->getColor().'<br>';

$carroEspecial-> acelerar();
$carroEspecial-> acelerar();
$carroEspecial-> acelerar();
$carroEspecial-> acelerar();
$carroEspecial-> acelerar();


echo 'ahora la velocidad de mi carro es:'.$carroEspecial-> getVelocidad().'<br>';
$carroEspecial-> frenar();
echo 'ahora la velocidad de mi carro es:'.$carroEspecial-> getVelocidad().'<br>';

