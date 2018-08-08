<?php
// CONEXAO BANCO //
$host	= "localhost";
$user	= "root";
$senha	= "";
$bd		= "bitcoin";

	$conm	=	mysqli_connect($host, $user, $senha, $bd);
// BUSCANDO DADOS DO FORM //

			$recnome=			$_POST["fnome"];
			$recemail=			$_POST["femail"];
			$recsenha=			md5($_POST["fsenha"]);
			$recsexo=			$_POST["fsexo"];
			$recdatanascimento = $_POST['fdatanascimento'];
// ----------------------------------------------------------- // 

	$sql=	( "INSERT INTO identificacao (nome, email, senha, sexo, datanascimento) VALUES ('$recnome', '$recemail', '$recsenha','$recsexo', '$recdatanascimento');");
	$query=		mysqli_query($conm, $sql);


	header("location:../cadastro.php");
?>
