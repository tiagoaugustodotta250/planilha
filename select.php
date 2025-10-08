<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table>
        <tr>
            <th>Carga</th>
            <th>Dia</th>
            <th>Borderô</th>
            <th>Valor</th>
            <th>Frete</th>
        </tr>
        <tr></tr>
    <?php

        $sql = "SELECT * FROM Carga";
        
        $result = $conn->query($sql);

        if($result->num_rows > 0){

            while ($row = $result->fetch_assoc()) {

                echo "<table></table>";
            }
        }
    ?>

</body>
</html>