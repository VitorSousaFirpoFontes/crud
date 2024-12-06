<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pesquisar.php" method="POST">
        <label for="termo">Digite o termo de pesquisa:</label><br>
        <input type="text" id="termo" name="busca" placeholder="Digite algo..."><br><br>
        <input type="submit" value="Pesquisar">
    </form>

    <?php 
    
if (isset($_POST['busca'])) {
	$pesquisa = $_POST['busca'];
	} else {
	$pesquisa= '  ';
}

include "conexao.php";
    
$sql = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'";

 
$dados = mysqli_query($conn, $sql);

while($linha = mysqli_fetch_assoc($dados)) {
    foreach($linha as $key => $value) {
        echo $key . ": " . $value . "<br>";
       
    }
    echo "<a href='editar.php?id=" . $linha['id'] . "'>Editar</a><br><br>";
}


    ?>
</body>
</html>