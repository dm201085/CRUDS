<?php 
$host = 'localhost';
$db   = 'crud_categorias';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
  
    $pdo = new PDO($dsn, $user, $pass);
   
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso!";
} catch (PDOException $e) {
 
    echo "Erro na conexão: " . $e->getMessage();
}