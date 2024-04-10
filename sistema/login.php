<?php
// Inclui o script de conexão com o banco de dados
include_once "conexao.php";

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuarios WHERE username = ? AND password = ?";


   
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login bem-sucedido
        header("Location: dashboard.html");
        exit();
    } else {
        // Login falhou
        echo "<script>alert('Usuário ou senha incorretos. Tente novamente.');</script>";
     
    }
 
}
?>