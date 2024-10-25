<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Introduce un número entre 1 y 10</h1>
    <form action="" method="post">
        <label for="numero">Número:</label>
        <input type="number" id="numero" name="numero" min="1" max="10" required>
        <input type="submit" value="Mostrar Tabla">
    </form>

    <?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if (is_numeric($numero) && $numero >= 1 && $numero <= 10) {
            echo "<h2>Tabla de multiplicar del $numero</h2>";
            echo "<table border='1' cellpadding='5' cellspacing='0'>";
            echo "<tr><th>Multiplicando</th><th>Resultado</th></tr>";

            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }

            echo "</table>";
        } else {
            echo "Por favor, introduce un número válido entre 1 y 10.";
        }
    }
    ?>
</body>
</html>