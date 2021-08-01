<?php 
    $Clientes = simplexml_load_file("Clientes.xml");        
?>

<!-- $Xml_Document = new DOMDocument ( '1.0', 'UTF-8');

$Xml_Document-> formatOutput = true;

$Xml_Document-> PreserveWhitespace = false;

$Xml_Document-> load ( 'CLientes.xml');
 -->



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML to PDF</title>
</head>
<body>
    <header>
        <h1>Arrendadora Vive Feliz</h1>
    </header>
    <main>
        
        <table border=”1” rules=”groups”>
            <caption>
                <h2>Arrendatarios</h2>
            </caption>

            <thead>
                <tr>
                    <td>&nbsp;</td>
                    <td>Nombre</td>
                    <td>Apellidos</td>
                    <td>Rut</td>
                    <td>Tiempo</td>
                    <td>Monto</td>
                    <td>Direccion</td>
                    <td>&nbsp;</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($Clientes as $cliente): ?>
                    <tr>
                        <th> <?php echo $cliente ->I; ?> </th>
                        <td> <?php echo $cliente ->Nombre; ?> </td>
                        <td> <?php echo $cliente ->Apellidos; ?> </td>
                        <td> <?php echo $cliente ->Rut; ?> </td>
                        <td> <?php echo $cliente ->Tiempo; ?> </td>
                        <td> <?php echo $cliente ->Monto; ?> </td>
                        <td> <?php echo $cliente ->Direccion; ?> </td>
                        <td> <a href="#">Editar</a> </td>
                    </tr>
                <?php endforeach; ?>
    
            </tbody>        
        </table>
        <br>
        <a href="pdf.php" target="_blank">Descargar PDF </a>
        <br>
        <hr>
    </main>
    <footer>
        Copyright - Zvonko
    </footer>
</body>
</html>