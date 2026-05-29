<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bitácora de Seguridad</title>
</head>
<body>

    <h2>Registrar Actividad</h2>
    <form action="" method="POST">
        Fecha: <input type="date" name="fecha" required><br><br>
        Actividad: <input type="text" name="actividad" required><br><br>
        Responsable: <input type="text" name="responsable" required><br><br>
        <button type="submit" name="guardar">Guardar en Bitácora</button>
    </form>

    <?php
    $archivo = "bitacora.txt";

    // PARTE 1: Escribit
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['guardar'])) {
        $fecha = trim($_POST['fecha']);
        $actividad = trim($_POST['actividad']);
        $responsable = trim($_POST['responsable']);

        // Validación simple
        if (!empty($fecha) && !empty($actividad) && !empty($responsable)) {
            $texto = "Fecha: $fecha | Actividad: $actividad | Responsable: $responsable" . PHP_EOL;
        
            file_put_contents($archivo, $texto, FILE_APPEND);
            echo "<p style='color: green;'>¡Guardado con éxito!</p>";
        } else {
            echo "<p style='color: red;'>Por favor, llena todos los campos.</p>";
        }
    }

    // PARTE 2: Historial
    echo "<h3>Historial de la Bitácora:</h3>";
    if (file_exists($archivo)) {
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        if (!empty($lineas)) {
            echo "<ol>"; // Lista ordenada
            foreach ($lineas as $linea) {
                echo "<li>" . htmlspecialchars($linea) . "</li>";
            }
            echo "</ol>";
        } else {
            echo "<p>La bitácora está vacía.</p>";
        }
    } else {
        echo "<p>No hay registros todavía.</p>";
    }
    ?>

</body>
</html>