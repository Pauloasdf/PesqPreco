<?php
	include('conecta.php');
	$consulta ="SELECT * FROM identificacao";
	$con = query($consulta) or die($mysqli->error);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<table>
		<tr>
			<td>Código</td>
			<td>Nome</td>
			<td>Email</td>
			<td>Senha</td>
			<td>Data de Nascimento</td>
		</tr>
		<?php while ($dado = $con->fetch_array()) { ?>
		<tr>
			<td><?php echo $dado["codigo"]; ?></td>
			<td><?php echo $dado["nome"]; ?></td>
			<td><?php echo $dado["email"]; ?></td>
			<td><?php echo md5($dado["senha"]); ?></td>
			<td><?php echo $dado["datanascimento"]; ?></td>
		</tr>
		<?php } ?>o
	</table>
</body>
</html>