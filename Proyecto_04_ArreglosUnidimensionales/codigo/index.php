<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Productos</title>
</head>
<body>

    <h2>Registro de Productos</h2>
    <form action="procesar.php" method="POST">
        
        <p>
            <strong>Producto 1:</strong><br>
            <input type="text" name="productos[]" required placeholder="Nombre">
            <input type="number" name="precios[]" step="0.01" required placeholder="Precio">
        </p>

        <p>
            <strong>Producto 2:</strong><br>
            <input type="text" name="productos[]" required placeholder="Nombre">
            <input type="number" name="precios[]" step="0.01" required placeholder="Precio">
        </p>

        <p>
            <strong>Producto 3:</strong><br>
            <input type="text" name="productos[]" required placeholder="Nombre">
            <input type="number" name="precios[]" step="0.01" required placeholder="Precio">
        </p>

        <p>
            <strong>Producto 4:</strong><br>
            <input type="text" name="productos[]" required placeholder="Nombre">
            <input type="number" name="precios[]" step="0.01" required placeholder="Precio">
        </p>

        <p>
            <strong>Producto 5:</strong><br>
            <input type="text" name="productos[]" required placeholder="Nombre">
            <input type="number" name="precios[]" step="0.01" required placeholder="Precio">
        </p>

        <input type="submit" value="Enviar y Calcular">
    </form>

</body>
</html>