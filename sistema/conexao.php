<?php
//configurações do banco de dados
$hostname = "localhost"; //Hostname do servidor mysql
$username= "root"; //Nome de usuario do banco de dados
$password = ""; //Senha do banco de dados 
$database = "escola"; //Nome do banco de dados


//conexão com o banco de dados 
$conn = new mysqli ($hostname, $username, $password, $database);

//verifica a conexão 
if($conn ->connect_error) {
    die("Erro de conexão: " . $conn ->connect_error);
} 

?>