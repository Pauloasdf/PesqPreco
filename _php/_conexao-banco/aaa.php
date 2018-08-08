<?php
	
$host	= "localhost";
$user	= "root";
$senha	= "";
$bd		= "bitcoin";
	$conm	=	mysqli_connect($host, $user, $senha, $bd);

	session_start()
	$sql	=	"SELECT * FROM identificacao WHERE email='$email' AND senha='$senha'";

	$result = mysqli_query($conm, $sql);


if(mysql_num_rows ($result) > 0 )
{
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;
$_SESSION['codigo'] = $dados['codigo'];
$_SESSION['nome'] = $dados['nome'];
$_SESSION['dataNascimento'] = $dados['dataNascimento'];
$_SESSION['sexo'] = $dados['sexo'];
$_SESSION['descricao'] = $dados['descricao'];
header('location:../_php/meuperfil.php');
}