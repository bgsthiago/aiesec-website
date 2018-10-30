<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href=" <?= base_url("assets/css/bootstrap.css") ?>">
	<meta charset="utf-8">
	<title>Cadastro - ONGS - AIESEC WebSite</title>
</head>
<form action="CadastrarOng/inserirCadastro" method="post">
  <div class="form-group">
    <label for="cnpj">CNPJ</label>
    <input type="text" class="form-control" name = "cnpj" id="cnpj" placeholder="xx.xxx.xxx/xxxx-xx">
  </div>
  <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira aqui o nome da ONG">
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type ="tel" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxxx-xxxx"></textarea>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
