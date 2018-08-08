<?php
// CONEXAO BANCO //
$host	= "localhost";
$user	= "root";
$senha	= "";
$bd		= "bitcoin";

	$conm	=	mysqli_connect($host, $user, $senha, $bd);
// BUSCANDO DADOS DO FORM //

			$EMAIL = $_SESSION['email'];
			$SENHA = $_SESSION['senha'];
			$foto = $_FILE["foto"];

    //define o caminho 
    $destino = "../_Imagens/";

    //armazena na variavel o novo nome
    $arquivo = basename($foto['name']);

   //concatena a variavel do caminho com o nome do arquivo 
  	$destino = $destino . $arquivo; 

	//testa se a funçao de upload rodar
	if(move_uploaded_file($foto['tmp_name'], $destino)) {
	    $cadastrarfoto = "UPDATE identificacao SET foto=[$destino] WHERE email= '$EMAIL' AND senha='$SENHA'";

	    echo "O arquivo $arquivo foi enviado.";
	} else{
	    echo "Ocorreu um erro. Tente novamente";
}
// ----------------------------------------------------------- // 

	$sql=	( "INSERT INTO identificacao (nome, email, senha, sexo, datanascimento) VALUES ('$recnome', '$recemail', '$recsenha','$recsexo', '$recdatanascimento');");
	$query=		mysqli_query($conm, $sql);


	header("location:meuperfil.php");
?>
