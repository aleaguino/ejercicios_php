<?php
$distancia = $_POST['distancia'];
$velocidad = $_POST['velocidad'];

if(isset($distancia) && isset($velocidad)){
    if(is_numeric($distancia) && is_numeric($velocidad)){
        $tiempo = $distancia / $velocidad;
        echo "La $distancia km en $velocidad km/h se tarda $tiempo h";
    } else {
        echo "Por favor, ingresa valores numéricos para distancia y velocidad.";
    }
} else {
    echo "Por favor, completa ambos campos de distancia y velocidad.";
}
?>