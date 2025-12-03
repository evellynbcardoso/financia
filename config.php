<?php
// Cofigurações do Banco de Dados
define('DB_HOST', 'localhost');
define('DB_PORT', '3306');
define('DB_NAME', 'finacia');
define('DB_USER', 'root');
define('DB_PASS', 'mysql');

//conexão com o Banco de Dados 
try {
    $conn = new PDO("mysql:hot=$DB_HOST; port=$DB_PORT;debname=$DB_NAME;
    charset=utf8mb4",$DB_USER,$DB_PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão com o banco de dados " . $e->getMessage());
}
?>