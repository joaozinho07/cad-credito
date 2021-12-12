<?php
$id = $_POST['id'];
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "info03n";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 

	
	$result_usuario = "DELETE FROM `cad_usurio` WHERE id = '$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5;http://localhost/info03n/" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="del_cad_php.css">
    <title>Alteração de Usuário</title>
</head>
<body>
    <h1>Usuário Excluído!</h1>
    <br>
    <h2>Você será redirecionado para a tela principal</h2>
</body>
</html>