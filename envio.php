<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planilha</title>
</head>
<body>
    
    <?php

        include 'db.php';

        if($_SERVER["REQUEST_METHOD"] == "GET"){

            $carga = $_GET['carga'];
            $dia = $_GET['dia'];
            $bordero = $_GET['bordero'];
            $valor = $_GET['valor'];
            $frete = $_GET['frete'];

            $stmt = $conn->prepare("INSERT INTO CARGA(carga, dia, bordero, valor, frete) VALUES (?, ?, ?, ?, ?)");

            $stmt->bind_param("issss", $carga, $dia, $bordero, $valor, $frete);

            if($stmt->execute()){
                echo "<p>Cadastro realizado com sucesso!</p>";
            };

            $stmt->close();

            $table = [$carga, $dia, $bordero, $valor, $frete];
        }
    ?>
    
    <table>
        <tr>
            <th>Carga</th>
            <th>Dia</th>
            <th>Borderô</th>
            <th>Valor</th>
            <th>Frete</th>
        </tr>
        <tr>
    <?php

        foreach($table as $value){

            echo "<td>$value</td>";
        }
    ?> 
   
        </tr>
        </table>
        
</body>
</html>
