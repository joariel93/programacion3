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
$palabra = "Parcial";
$max = 13;
function ValidarPalabra($laPalabra, $maximo){
    if (strlen($laPalabra)<=$maximo) {
        switch($laPalabra){
            case "Recuperatorio":
            case "Parcial":
            case "Programacion": 
                $retorno = 1;
                break;
        }
    }
}
ValidarPalabra($palabra,$max);
echo "El retorno ".$retorno;

?>