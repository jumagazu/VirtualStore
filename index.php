<?php
// El archivo autoload inicializa todos lo archivos necesarios para que el framework funcione
include "core/autoload.php";


// Cargamos el modulo iniciar.
$lb = new Lb();
$lb->loadModule("index");

?>