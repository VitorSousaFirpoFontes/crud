<?php 

include "conexao.php";


$id = $_POST['id'] ?? '  ';
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];



$sql = "UPDATE `produtos` SET nome = '$nome', descricao = '$descricao', preco = '$preco', quantidade = '$quantidade' WHERE id = '$id'";

if (mysqli_query($conn, $sql)) {
    echo "$nome cadastrado com sucesso";
} else 
    echo "Não foi cadastrado";

?>