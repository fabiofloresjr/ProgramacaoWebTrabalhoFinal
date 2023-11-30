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

$chave_pix_cadastro = $_POST['chave_pix_cadastro'];
$tipo_chave = (strlen($chave_pix_cadastro) === 9) ? 'telefone' : 'cpf';


$sql = "INSERT INTO ChavesPix (chave_pix, tipo_chave) 
        VALUES ('$chave_pix_cadastro', '$tipo_chave')";

if ($conn->query($sql) === TRUE) {
    echo "Chave PIX cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar chave PIX: " . $conn->error;
}

$conn->close();
?>