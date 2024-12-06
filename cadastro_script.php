<?php 

include "conexao.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

$sql="INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES
('$nome', '$descricao', $preco, $quantidade)";


if (mysqli_query($conn, $sql)) {
    echo "$nome cadastrado com sucesso";
} else 
    echo "Não foi cadastrado";

?>