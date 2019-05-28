<?php


$username = "root";//login on the example server "root"
$password = "";//example "root" server password


$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$genero = $_GET['genero'];
$idade = $_GET['idade'];
$estado_civil = $_GET['estado_civil'];
$rua = $_GET['rua'];
$numero = $_GET['numero'];
$bairro = $_GET['bairro'];
$uf = $_GET['uf'];
$cidade = $_GET['cidade'];
$sql="";


try {
$pdo = new PDO('mysql:host=localhost;dbname=prova', $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$stmt = $pdo->prepare("INSERT INTO tbl_pessoas (cpf, nome, idade,estado_civil,rua,numero,bairro,cidade,uf,genero)
VALUES(:cpf, :nome, :idade,:estado_civil,:rua,:numero,:bairro,:cidade,:uf,:genero) ");

$stmt->execute(array(
				    ':cpf' => $cpf,
				        ':nome' => $nome,
				            ':idade' => $idade,
				                'estado_civil' => $estado_civil,
				                    ':rua' => $rua, 
				                        ':numero' => $numero,
				                            ':bairro' => $bairro,
				                                ':cidade' => $cidade,
				                                    ':uf' => $uf,
				                                        ':genero' => $genero));

echo $stmt->rowCount(); 
echo "<script> alert('Cadastrado com Sucesso')</script>";
header("location:index.html");
} 
catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
  

  
?>