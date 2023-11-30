<?php
$serverName = "localhost";
$database = "trabalhofinal";
$userName = "root";
$password = "";

$conn= mysqli_connect($serverName, $userName, $password, $database);

if(!$conn){
    die("Erro na conexão do DB " 
            . mysqli_connect_error());
}

$chave_pix_remocao = $_POST['chave_pix_remocao'];

$sql = "DELETE FROM ChavesPix WHERE chave_pix = $chave_pix_remocao";

if ($conn->query($sql) === TRUE) {
    echo "Chave PIX removida com sucesso!";
} else {
    echo "Erro ao remover chave PIX: " . $conn->error;
}

$conn->close();
?>