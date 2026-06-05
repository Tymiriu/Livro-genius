<?php

// Configurações do banco
$host    = "sql201.infinityfree.com";
$usuario = "if0_41988385";     
$senha   = "Fyfa202021";      
$banco   = "if0_41988385_LivroGenius";

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

echo "Conexão realizada com sucesso!";
?>