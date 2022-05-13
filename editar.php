<?php
include("conexao.php");

$id 		= $_POST['id'];
$nome 		= $_POST['nome'];
$endereco	= $_POST['endereco'];
$telefone	= $_POST['telefone'];

$sql = "UPDATE clientes SET
		nome = '$nome',
		endereco = '$endereco',
		telefone = '$telefone'
		WHERE id = '$id'";

$query = mysqli_query($conn, $sql);
mysqli_close($conn);
if($query == true){
	echo "Dados atualizados com sucesso <br>";
} 
else{
	echo "Error ao atualizar dados <br>";
}
//echo "<a href='exibe_clientes.php'><img src=imagens/voltar.png' width='60'></a>"
echo "<a href='exibe_clientes.php'><----voltar</a>"

?>