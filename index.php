<?php

header('Content-Type: ngrok-skip-browser-warning');
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $respuesta = [
        "mensaje" => "Amate tal y como eres!",
        "status" => "exitoso",
        "fecha" => date("Y-m-d H:i:s")
    ];
    
    echo json_encode($respuesta);
}


?>