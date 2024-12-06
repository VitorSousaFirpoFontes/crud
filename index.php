<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="cadastro_script.php" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea><br><br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" required><br><br>

        <label for="quantidade">Quantidade em Estoque:</label>
        <input type="number" id="quantidade" name="quantidade" required><br><br>

        <input type="submit" value="Cadastrar Produto">
        <input type="hidden" name="id" value= "<?php echo $linha['id']?> ">;
    </form>
</body>
</html>
