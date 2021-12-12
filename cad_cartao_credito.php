<?php // Abertura do PHP

/*

As variáveis de conexão com o banco de dados:

SERVIDOR - Colocar o endereço do servidor 
USUÁRIO - Usuário do banco 
SENHA - senha do banco de dados
DBNAME - Nome do banco de dados

*/

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "info03n";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 



//Variáveis

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

//Inserindo dados

$sql = "insert into cad_usurio (nome,cpf,rg,nome_pai,nome_mae,contato,endereco,estado_civil,nascimento,escolaridade,profissao,renda) 
values ('{$nome}','{$cpf}','{$rg}','{$nome_pai}','{$nome_mae}','{$contato}','{$endereco}','{$estado_civil}','{$nascimento}','{$escolaridade}','{$profissao}','{$renda}')";

mysqli_query($conn,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="10;http://localhost/info03n/" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cad_cartao_php.css">
    <title>Confirmação de Cadastro</title>
</head>
<body>
    <h1>Usuário Cadastrado!</h1>
    <br>
    <h2>Você será redirecionado para a tela principal</h2>
    <h2>Em até 24h você receberá um e-mail de aprovação do seu cratão de crédito</h2>
    <h2>Agradecemos pela preferência!</h2>
</body>
</html>