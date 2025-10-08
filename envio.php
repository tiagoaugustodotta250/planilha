<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilha</title>
</head>
<body>
    
    <?php

        $carga = $_GET['carga'];
        $dia = $_GET['dia'];
        $bordero = $_GET['bordero'];
        $valor = $_GET['valor'];
        $frete = $_GET['frete'];

        $stmt = $mysqli->prepare("INSERT INTO CARGA(carga, dia, bordero, valor, frete) VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("issss", $carga, $dia, $bordero, $valor, $frete);

        $stmt->execute();
    ?>

    <?php

        echo " 
        
        <table>
        <tr>
            <th>Carga</th>
            <th>Dia</th>
            <th>Borderô</th>
            <th>Valor</th>
            <th>Frete</th>
        </tr>
        <tr>
            <td>$carga</td>
            <td>$dia</td>
            <td>$bordero</td>
            <td>$valor</td>
            <td>$frete</td>
        </tr>
        </table>
        
        "
    ?>

</body>
</html>