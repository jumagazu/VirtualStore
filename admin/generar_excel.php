<?php

/*Se establecen los encabezados para que el navegador interprete que descargará un archivo de Excel.*/

header('Content-type: application/vnd.ms-excel;charset=utf-8');
header("Content-Disposition: attachment; filename=oportunidad.xls");
header("Pragma: no-cache");
header("Expires: 0");

/*Se construye una tabla HTML*/
$print = "<table>";
$print .= "<tr>";
$print .= "<td>";
$print .= "Operacion";
$print .= "</td>";
$print .= "<td>";
$print .= "Cliente";
$print .= "</td>";
$print .= "<td>";
$print .= "SubTotal";
$print .= "</td>";
$print .= "<td>";
$print .= "Descuento";
$print .= "</td>";
$print .= "<td>";
$print .= "Total";
$print .= "</td>";
$print .= "<td>";
$print .= "metodo de pago";
$print .= "</td>";
$print .= "<td>";
$print .= "estado";
$print .= "</td>";
$print .= "<td>";
$print .= "fecha";
$print .= "</td>";
$print .= "</tr>";
$print .= "<tr>";
$print .= "<td>";
$print .= "10";
$print .= "</td>";
$print .= "<td>";
$print .= "20";
$print .= "</td>";
$print .= "<td>";
$print .= "=suma(A2:B2)";
$print .= "</td>";
$print .= "</tr>";
$print .= "</table>";

echo $print;

?>