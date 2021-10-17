<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$resultado_usuario = mysqli_query($conn, "insert into usuarios (nome, email, telefone, mensagem) values ('$nome', '$email', '$telefone', '$mensagem')");

if($conn == true){
	echo 'Cadastro enviado com Sucesso!';
}else{
	echo 'Cadastro com erro';
}

?>