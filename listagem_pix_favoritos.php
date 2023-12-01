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

$usuario_id = $_POST['usuario_id'];

$sql = "SELECT chave_pix, tipo_chave FROM ChavesPixFavoritas WHERE usuario_id = $usuario_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Chaves PIX Favoritas</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>Tipo: " . $row["tipo_chave"] . ", Chave: " . $row["chave_pix"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhuma chave PIX favorita encontrada.";
}

$conn->close();
?>