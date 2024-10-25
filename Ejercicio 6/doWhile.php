<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    if (is_numeric($numero) && $numero > 0) {
        $suma = 0;
        $i = 1;

        do {
            $suma += $i;
            $i++;
        } while ($i <= $numero);

        echo "La suma de todos los números de 1 hasta $numero es: $suma";
    } else {
        echo "Por favor, introduce un número válido mayor que 0.";
    }
}
?>