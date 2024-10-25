<?php
$edad = $_GET['edad'];

    if (is_numeric($edad) && $edad >= 0) {
        switch (true) {
            case ($edad < 12):
                echo "Infante";
                break;
            case ($edad >= 12 && $edad <= 17):
                echo "Adolescente";
                break;
            case ($edad >= 18 && $edad <= 60):
                echo "Adulto";
                break;
            case ($edad > 60):
                echo "Anciano";
                break;
        }
    } else {
            echo "Por favor, introduce una edad válida.";
        }
        ?>