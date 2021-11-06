<?php
//enviando informações ao banco
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$resultado_usuario = mysqli_query($conn, "insert into usuarios (nome, email, telefone, mensagem) values ('$nome', '$email', '$telefone', '$mensagem')");

if($conn == true){
	echo  "<script>alert('Cadastro enviado com Sucesso!');</script>";
}else{
	echo  "<script>alert('Cadastro com erro!');</script>";
}

?>

<?php
//listando informações
include_once("conexao.php");


$query = 'SELECT * FROM usuarios';

$query_run = mysqli_query($conn, $query);

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Mensagens</title>
</head>
<body>
	<div class="container">
		<div class="row m-5">
			<div class="col-md-10">
				<h2 class="mb-5">Registros de usuarios</h2>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Nome</th>
							<th scope="col">E-mail</th>
							<th scope="col">Telefone</th>
							<th scope="col">Mensagem</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							while($consulta = mysqli_fetch_assoc($query_run))
							{ 
								echo '<tr>';
								echo'<td>'.$consulta['nome'].'</td>';
								echo'<td>'.$consulta['email'].'</td>';
								echo'<td>'.$consulta['telefone'].'</td>';
								echo'<td>'.$consulta['mensagem'].'</td>';
								echo'</tr>';
							}
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>