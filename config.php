<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id20421018_fasalva"; // usuário do MySQL
$pass = "F@bio_12345678"; // senha do MySQL
$dbname = "id20421018_minipi"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
