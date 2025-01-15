<?php

header('Access-Control-Allow-Origin: *'); // con esta weada, todos los origenes pueden pedir info
header('content-type: application/json; charset=utf-8'); // el formato en el que devolves

$primeraRes = rand(1, 3);

if ($primeraRes === 1) {
    $primeraRes = "Amate tal y como eres!";
};

if ($primeraRes === 2) {
    $primeraRes = "La vida sigue, no te rindas!";
};

if ($primeraRes === 3) {
    $primeraRes = "Esta API te quiere mucho";
};

if ($_SERVER['REQUEST_METHOD'] === "GET") { // nomas get
    $respuesta = [
        "mensaje" => $primeraRes,
        "status" => "Exitoso!",
        "fecha" => date("Y-m-d H:i:s")
    ];
    
    echo json_encode($respuesta);
}

?>