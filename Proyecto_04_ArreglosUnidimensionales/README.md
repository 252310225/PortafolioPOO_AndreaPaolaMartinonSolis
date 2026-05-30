# Arreglos unidimensionales en PHP

**Objetivo del proyecto**

Aprender a utilizar arreglos unidimensionales en PHP para almacenar y procesar información de productos y precios.

**Problema que resuelve**

Permite organizar productos y realizar cálculos automáticos como suma, promedio, precio mayor y precio menor.

**Tecnologías utilizadas**
- PHP
- HTML5
- XAMPP
- Visual Studio Code

**Conceptos aplicados**
- Arreglos unidimensionales
- Arreglos paralelos
- Funciones de PHP (array_sum, max, min)
- Envío de datos mediante POST

**Instrucciones de ejecución**
1. Copiar los archivos en la carpeta htdocs.
2. Iniciar Apache en XAMPP.
3. Abrir localhost en el navegador.
4. Capturar los productos y enviar el formulario.

**Reflexión personal**
- ¿Qué aprendí? Aprendí que los arreglos unidimensionales son súper útiles porque te dejan guardar listas completas de cosas similares bajo un solo nombre. También aprendí que usar funciones que ya vienen en PHP (como array_sum(), max() y min()) te ahorra mucho tiempo y líneas de código porque hacen el trabajo pesado de inmediato.
- ¿Qué fue difícil? Al principio me costó un poco de trabajo entender cómo conectar los dos arreglos paralelos para que al buscar el precio más caro con max(), el programa supiera exactamente a qué nombre de producto le pertenecía ese costo. También requirió atención validar bien que el usuario no dejara campos vacíos en el formulario
- ¿Qué mejoraría? En lugar de usar arreglos paralelos sueltos, me gustaría mejorar el programa usando arreglos asociativos o colecciones de objetos para que cada producto y su precio estén amarrados en una sola variable. También cambiaría el código para poder agregar o quitar filas de productos de forma dinámica con un botón, sin estar limitado a capturar solo 5 a la fuerza.
