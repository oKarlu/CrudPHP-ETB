<?php



$usuario = "root";
$pass = "";
$banco = "test";
$server = "127.0.0.1";

//conexao com o banco
$conn = mysqli_connect($server,$usuario,$pass,$banco);

$nome 		= $_POST['nome'];
$endereco 	= $_POST['endereco'];
$telefone	= $_POST['telefone'];


if ($conn == FALSE){
	echo "erro de conexao ao banco";
}


$insert = "INSERT INTO clientes (id, nome, endereco, telefone) VALUES (NULL, '$nome', '$endereco', '$telefone')";

$query = mysqli_query($conn,$insert);

if ($query == FALSE){
	echo "erro";	
}

else{
	echo "Dados cadastrados com sucesso";
	
	
}
?>