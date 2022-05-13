<?php 
// Criando tabela e cabeçalho de dados: 
echo "<head>
<style>
table {
	border-collapse: collapse;
	width: 100%;
}
th, td {
	text-align: left;
	padding: 8px;
}
tr:nth-child(even){background-color: #C0C0C0}
</style></head>";
echo "<table border=l>"; 
echo "<tr>"; 
echo "<th>ID</th>"; 
echo "<th>NOME</th>"; 
echo "<th>ENDEREÇO</th>"; 
echo "<th>TELEFONE </th>";
echo "<th>AÇÃO</th>";
echo "</tr>"; 


$user= "root";
$pass = "";
$banco = "test";
$server = "127.0.0.1";
//Conectando banco de dados:
$conn = mysqli_connect($server,$user,$pass,$banco) or die ("Erro ao conectar ao banco");
$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conn,$sql) 
                   or die("Erro ao consultar registros");

// Obtendo os dados por mein de um loop while 
while ($registro = mysqli_fetch_array($resultado)) 
{
$id = $registro['id']; 
$nome = $registro['nome']; 
$endereco = $registro['endereco']; 
$telefone = $registro['telefone']; 
	echo "<tr>"; 
	echo "<td>".$id."</td>"; 
	echo "<td>".$nome."</td>"; 
	echo "<td>".$endereco."</td>"; 
	echo "<td>".$telefone."</td>";
	echo "<td><a href=form_update.php?id=$id> Editar</a> | <a href=deletar.php?id=$id> Deletar</a> 
	</td>";
	echo "</tr>";
} 
mysqli_close($conn); 
echo "</table>";  
echo "<hr>"
?>

<?php
echo "Pesquisa:<input type='text' name='pesquisa'";
echo "<input type='submit' value='Pesquisar'>";

?>