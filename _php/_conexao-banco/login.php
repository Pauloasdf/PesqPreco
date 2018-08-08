<?php


	session_start();



	$host	= "localhost";
	$user	= "root";
	$senha	= "";
	$bd		= "bitcoin";
		
	// $conm	=	mysqli_connect($host, $user, $senha, $bd);
	require_once('conecta.php');
	// BUSCANDO DADOS DO FORM //	

	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	

	$sql = "SELECT * FROM identificacao WHERE email = '$email' AND senha ='$senha'";

	$objDb = new db();
	$conm = $objDb->conecta_mysql();

	$resultado_id	=	mysqli_query($conm, $sql);

	if ($resultado_id) {

	$dados_usuario = mysqli_fetch_array($resultado_id);

			if (isset($dados_usuario['email'])) {

				$_SESSION['email'] = $dados_usuario['email'];
				$_SESSION['senha'] = $dados_usuario['senha'];

				header('location:../meuperfil.php');
			}else{
				header('location:../login-cadastro.php?erro=1');
			}
	
	}else{

	echo "Erro na execução da consulta, favor entrar em contato";

	}





// ----------------------------------------------------------- // 




	//header("location:cadastro.php");
?>
