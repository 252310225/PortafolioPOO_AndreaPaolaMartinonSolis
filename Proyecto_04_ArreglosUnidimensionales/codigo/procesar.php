<?php
$productos = $_POST['productos'];
$precios = $_POST['precios'];

$precioTotal = array_sum($precios);
$promedio = $precioTotal / count($precios); 

$precioMasCaro = max($precios); 
$indiceCaro = array_search($precioMasCaro, $precios); 
$productoMasCaro = $productos[$indiceCaro]; 

$precioMasBarato = min($precios);
$indiceBarato = array_search($precioMasBarato, $precios); 
$productoMasBarato = $productos[$indiceBarato]; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>

    <h2>Resultados del Inventario</h2>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr style="background-color: #eee;">
            <th>Producto</th>
            <th>Precio</th>
        </tr>
        <?php for($i = 0; $i < count($productos); $i++) { ?>
        <tr>
            <td><?php echo $productos[$i]; ?></td>
            <td>$<?php echo $precios[$i]; ?></td>
        </tr>
        <?php } ?>
    </table>

    <h3>Resumen de Cálculos:</h3>
    <p><strong>Precio Total:</strong> $<?php echo $precioTotal; ?></p>
    <p><strong>Promedio de Precios:</strong> $<?php echo round($promedio, 2); ?></p>
    <p><strong>Producto Más Caro:</strong> <?php echo $productoMasCaro; ?> ($<?php echo $precioMasCaro; ?>)</p>
    <p><strong>Producto Más Barato:</strong> <?php echo $productoMasBarato; ?> ($<?php echo $precioMasBarato; ?>)</p>

    <br>

</body>
</html>