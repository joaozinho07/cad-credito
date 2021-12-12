<?php
$id = $_POST['id']; 
$nome = $_POST['nome']; 
$cpf = $_POST['cpf']; 
$rg = $_POST['rg']; 
$nome_pai = $_POST['nome_pai']; 
$nome_mae = $_POST['nome_mae']; 
$contato = $_POST['contato']; 
$endereco = $_POST['endereco']; 
$estado_civil = $_POST['estado_civil']; 
$nascimento = $_POST['nascimento'];
$escolaridade = $_POST['escolaridade'];
$profissao = $_POST['profissao'];
$renda = $_POST['renda']; 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "info03n";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 

	
	$result_usuario = "UPDATE cad_usurio SET nome = '$nome' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET cpf = '$cpf' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET rg = '$rg' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET nome_pai = '$nome_pai' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET nome_mae = '$nome_mae' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET contato = '$contato' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET endereco = '$endereco' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET estado_civil = '$estado_civil' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET nascimento = '$nascimento' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET escolaridade = '$escolaridade' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET profissao = '$profissao' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
    $result_usuario = "UPDATE cad_usurio SET renda = '$renda' WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;http://localhost/info03n/" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="atualizacao_php.css">
    <title>CADASTRO DE CURSO</title>
</head>
<body>
    <h1>Curso Alterado</h1>
    <br>
    <h2>Você será redirecionado para a tela principal</h2>
</body>
</html>