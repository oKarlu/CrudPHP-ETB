<?php
	include('conexao.php');
	//if(isset($_GET['id']))

	$id = $_GET['id'];
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($conn, $sql);

	$registro = mysqli_fetch_array($resultado);
	$id = $registro['id']; 
	$nome = $registro['nome']; 
	$endereco = $registro['endereco']; 
	$telefone = $registro['telefone'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Cliente</title>
</head>
<body>
	<h1>Edição de registro de Clientes </h1> <hr>
	
	<form action="editar.php" method="post">
		<label>ID</label>
		<input type="text" name="id" value="<?php echo $id;?>"> <br><br>

		<label>Nome</label>
		<input type="text" name="nome" value="<?php echo $nome;?>"> <br><br>
		
		<label>Endereço</label>
		<input type="text" name="endereco" value="<?php echo $endereco;?>"> <br><br>

		<label>Telefone</label>
		<input type="text" name="telefone" value="<?php echo $telefone;?>"> <br><br>

		<input type="submit" name="atualizar" value="Atualizar"> <br><br>
	</form>

</body>
</html>