<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href=" <?= base_url("assets/css/bootstrap.css") ?>">
	<meta charset="utf-8">
	<title>ONGS - AIESEC WebSite</title>
</head>
<body>
	<h1>ONGS</h1>
	<table class = "table">
		<tr>
			<th>CNPJ</th>
			<th>Nome</th>
			<th>Telefone</th>
			<th>Ações</th>
		</tr>
		<?php foreach($ongs as $ong) : ?>
		<tr>
			<td><?= $ong['cnpj'] ?></td>
			<td><?= $ong['nome'] ?></td>
			<td><?= $ong['telefone'] ?></td>
			<?php//precisa arrumar isso aqui?>
			<td><a href="editar" class="btn btn-primary">Editar</button></td>
		</tr>
	<?php endforeach ?>

	</table>

</body>
</html>
