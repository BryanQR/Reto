<?php
//1-Crear una funcion que muestre si un numero es par o impar
function paroimpar() 
{
    $numero=10;
    if($numero %2==0)
        echo "El numero $numero es par<br>";
        else
        echo "El numero $numero es impar<br>";
}
paroimpar();
//2.Crear una funcion que determine el mayor de dos numeros
function mayoromenor()
{
    $numero1=10;
    $numero2=19;
    if($numero1>$numero2){
        echo "El numero $numero2 es el menor<br>";
        echo "El numero $numero1 es el mayor<br>";}
        else{
            echo "El numero $numero2 es el mayor <br>";
            echo "El numero $numero1 es el menor<br>";}
}
mayoromenor();
//3.Crear una funcion para calcular el cuadrado de un numero
function cuadrado()
{
    $num=9;
    $cuadrado=$num*$num;
    echo "El cuadrado del numero $num es $cuadrado";

}
cuadrado();
?>
