<?php
// El archivo AUTOLOAD inicializa todos lo archivos necesarios para que el framework funcione
include "core/autoload.php";


// cargamos el modulo iniciar.
$lb = new Lb();
$lb->loadModule("index");

?>