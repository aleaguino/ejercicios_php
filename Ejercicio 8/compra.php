<?php
session_start();

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = array();
}

if (isset($_POST['producto']) && !empty($_POST['producto'])) {
    $producto = trim($_POST['producto']);  
    
    $_SESSION['productos'][] = $producto;
}

if (isset($_POST['finalizar'])) {
    unset($_SESSION['productos']);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>

    <form action="" method="post">
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto">
        <input type="submit" value="Agregar a la lista">
    </form>

    <form action="" method="post">
        <input type="hidden" name="finalizar" value="true">
        <input type="submit" value="Finalizar y vaciar lista">
    </form>

    <?php
    if (!empty($_SESSION['productos'])) {
        echo "<h2>Tu lista de compras:</h2>";
        echo "<ul>";

        foreach ($_SESSION['productos'] as $producto) {
            echo "<li>" . htmlspecialchars($producto) . "</li>";
        }

        echo "</ul>";
    } else {
        echo "<p>No hay productos en la lista.</p>";
    }
    ?>
</body>
</html>