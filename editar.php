<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php     
include "conexao.php";
$id = $_GET['id'] ?? '  ';
$sql = "SELECT * FROM produtos WHERE id = $id";

$dados = mysqli_query($conn, $sql);

$linha = mysqli_fetch_assoc($dados);
?>

<form action="editando.php" method="POST">
    <label for="nome">Nome do Produto:</label>
    <input type="text" id="nome" name="nome" required value="<?php echo $linha['nome']; ?>"><br><br>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required><?php echo $linha['descricao']; ?></textarea><br><br>

    <label for="preco">Preço:</label>
    <input type="number" step="0.01" id="preco" name="preco" required value="<?php echo $linha['preco']; ?>"><br><br>

    <label for="quantidade">Quantidade em Estoque:</label>
    <input type="number" id="quantidade" name="quantidade" required value="<?php echo $linha['quantidade']; ?>"><br><br>

    <input type="submit" value="Cadastrar Produto">
    <input type="hidden" name="id" value= "<?php echo $linha['id']?> ">;
</form>

</body>
</html>