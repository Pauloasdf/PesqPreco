<?php
// CONEXAO BANCO //
class db {

private $host	= "localhost";
private $user	= "root";
private $senha	= "";
private $bd		= "bitcoin";



	public function conecta_mysql(){

		//criar a conexão
		$conm	=	mysqli_connect($this->host, $this->user, $this->senha, $this->bd);
		//ajustar o charset de comunicação entre a aplicação e o bd
		mysqli_set_charset($conm, 'utf8');
		//verificar se houve erro de conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar ao BD: ' .mysqli_connect_error();
		}
		return $conm;
	}
}
?>