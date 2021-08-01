<?php 
$Clientes = simplexml_load_file("Clientes.xml");
foreach ($clientes as $Clientes) {
    echo "Nombre: " . $Clientes ->nombre; echo "<br>";
    echo "Apellidos: " . $Clientes ->apellidos; echo "<br>";
    echo "Rut: " . $Clientes ->rut; echo "<br>";
    echo "Tiempo: " . $Clientes ->tiempo; echo "<br>";
    echo "Monto: " . $Clientes ->Monto; echo "<br>";
    echo "Direccion: " . $Clientes ->direccion; echo "<br>";
    echo "<br>";
}
?>