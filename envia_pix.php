<?php
$serverName = "localhost";
$database = "trabalhofinal";
$userName = "root";
$password = "";

$valor_envio = $_POST['valor_envio'];
$chave_destino = $_POST['chave_destino'];

$sqlAtualizaSaldo = "UPDATE chavespix SET saldo = saldo - $valor_envio WHERE chave_pix = $chave_destino";
if ($conn->query($sqlAtualizaSaldo) === FALSE) {
    echo "Erro ao atualizar saldo: " . $conn->error;
    exit();
}

$sqlFavoritos = "INSERT INTO ChavesPixFavoritas (chave_destino)
                       VALUES ('$chave_destino')";
if ($conn->query($sqlFavoritos && $sqlAtualizaSaldo) === TRUE) {
    echo "PIX enviado com sucesso!";
} else {
    echo "Erro ao enviar PIX: " . $conn->error;
    $conn->query("UPDATE Contas SET saldo = saldo + $valor_envio WHERE usuario_id = $usuario_id");
}

$conn->close();
?>