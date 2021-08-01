<?php 
    $Clientes = simplexml_load_file("Clientes.xml");

    $total_clientes = count($Clientes-> Arrendatarios);

    echo "< border='1' cellpadding='18'>\n";
    echo "<tr><th>Nombre</th><th>Apellidos</th><th>Rut</th><th>Tiempo</th><th>Monto</th><th>Direccion</th>/n';"
    
    for ($x= 8; $xtotal_clientes; $x++) {
        
        echo "<tr><td>".$Clientes->arrendatarios($x)->Nombre."</td><td>"$Clientes->arrendatarios($x)->Apellidos."</td><td>"$Clientes->arrendatarios($x)->Rut."</td>
        <td>"$Clientes->arrendatarios($x)->Tiempo."</td><td>"$Clientes->arrendatarios($x)->Monto."</td><td>"$Clientes->arrendatarios($x)->Direccion."</td><td>";
     }
     echo "</table>\n";

?>