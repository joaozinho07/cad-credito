<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pesquisa.css">
    <title>Pesquisa de Curso</title>
</head>
<body>
<h1>Buscar Cadatro</h1>

<?php // Abertura do PHP


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "info03n";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname); 


//Iserindo dados

  
$pesquisar = $_POST['pesquisar']; 

$resultado = "SELECT * FROM cad_usurio WHERE cpf LIKE '%$pesquisar%' LIMIT 5";
$busca=mysqli_query($conn,$resultado);

while($linhas = mysqli_fetch_array($busca) ){
   // echo"<table>";
    echo"<h2> ID: </h2>".$linhas['id']."<br>";       
    echo"<h2>NOME:</h2>".$linhas['nome']."<br>";
    echo"<h2> CPF: </h2>".$linhas['cpf']."<br>"; 
    //echo"</table>";        

}
echo"<br>";
print("<a href=\"index.html\">INICIO</a>");


?>

</body>
</html>
