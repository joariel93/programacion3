<?php
$separacion = "<br />"."/////////////////////////////////////////////////////"."<br />";

echo "Aplicacion 11";
$numeros = array(1, 2, 3, 4);
function MostrarPotencias($numero){
    for ($i=1; $i < 5; $i++) { 
        echo "^ ".$i." = ". pow($numero,$i). "<br/>";
    }
}

for ($i=0; $i < count($numeros); $i++) { 
    echo "Numero: ".$numeros[$i] . "<br/>";
    echo "Potencias <br/>";
    MostrarPotencias($numeros[$i]);
}

echo $separacion;
echo "Aplicacion 12". "<br/>";

$test = "Test";
function VoltearString ($elString){
    echo "Palabra original: ".$elString. "<br/>";
    echo "Palabra volteada: ";
    for ($i=strlen($elString)-1; $i >= 0; $i--) { 
        echo $elString[$i];
    }
}
VoltearString($test);

echo $separacion;
echo "Aplicacion 13"."<br/>";
$retorno = 0;
$palabra = "cualquiera";
$max = 13;
function ValidarPalabra($laPalabra, $maximo){
    if (strlen($laPalabra)<=$maximo) {
        if(strcmp($laPalabra,"Parcial")>0||strcmp($laPalabra,"Recuperatorio")>0||strcmp($laPalabra,"Programacion")>0){
            return 1;
        }
        else{
            return 0;
        }
    }
}
$retorno = ValidarPalabra($palabra,$max);
echo "El retorno ".$retorno."<br/>";
echo $separacion;
echo "Aplicacion 14"."<br/>";

function esPar($elNumero){
    if($elNumero%2==0){
        return true;
    }
    else{
        return false;
    }
}
function esImpar($elNumero){
    return !(esPar($elNumero));
}

$numeroPar = 4;
$numeroImpar = 5;

echo "Numero: ".$numeroPar."<br/>";
echo "Es par: ".esPar($numeroPar)."<br/>";
echo "Es impar: ".esImpar($numeroPar)."<br/>";
echo "Numero: ".$numeroImpar."<br/>";
echo "Es par: ".esPar($numeroImpar)."<br/>";
echo "Es impar: ".esImpar($numeroImpar)."<br/>";
?>