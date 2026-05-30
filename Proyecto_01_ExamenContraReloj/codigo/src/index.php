<?php
// Usamos require_once como pide el ejercicio
require_once 'Logistica/Paquete.php'; 
require_once 'Sensor.php';

// Instanciar los dos paquetes
$paqueteA = new Paquete();
$paqueteB = new Paquete();

// Asignar valores a las propiedades públicas de paqueteA
$paqueteA->codigoSeguimiento = "ABC1234";
$paqueteA->pesoKilogramos = 2.5;
$paqueteA->esFragil = true;

// Instanciar el Sensor
$sensor = new Sensor();

$sensor->id = 1;
$sensor->marca = "No se";
$sensor->rangoMaximo = 100.5;

// Para la propiedad ultimaLectura, le asignamos una nueva instancia de DateTime
$sensor->ultimaLectura = new DateTime(); 

echo "¡Código ejecutado con éxito y sin errores técnicos!";
?>