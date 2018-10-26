<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href=" <?= base_url("assets/css/bootstrap.css") ?>">
	<meta charset="utf-8">
	<title>Welcome to Teste</title>
</head>
<body>
	<h1>Welcome to Test!</h1>
	<table class = "table">
		<tr>
			<th>CNPJ</th>
			<th>Nome</th>
			<th>Telefone</th>
		</tr>
		<?php foreach($ongs as $ong) : ?>
		<tr>
			<td><?= $ong['cnpj'] ?></td>
			<td><?= $ong['nome'] ?></td>
			<td><?= $ong['telefone'] ?></td>
		</tr>
	<?php endforeach ?>

	</table>

</body>
</html>
