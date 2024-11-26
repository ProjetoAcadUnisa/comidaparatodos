<?php
// Configuração do banco de dados
$servername = "localhost";  // ou o IP do servidor MySQL
$username = "root";         // usuário do MySQL
$password = "";             // senha do MySQL (deixe em branco para o XAMPP por padrão)
$dbname = "unisa"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
