<?php
        $hostname = "localhost"; // Endereço do servidor
        $username = "root";
        $password = "";
        $dbname = "planilha"; // Nome do banco de dados

        // Cria a conexão
        $conn = new mysqli($hostname, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        echo "Conexão bem-sucedida!";
        ?>