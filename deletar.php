<?php
    $id = $_GET['id'];
    include ("conexao.php");

    $sql = "DELETE FROM clientes WHERE id = '$id'";
    $executa = mysqli_query($conn, $sql);

    header('Location:exibe_clientes.php');


?>