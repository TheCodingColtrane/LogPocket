<?php
require_once('functions.php');
add();
?>
<html> 
<head>
<meta charset="utf-8"> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>	
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>]
<link rel="stylesheet" src="../css/style.css">
</head>
</html>
<script>
$(document).ready(function($){
  $('#cpf').mask('000.000.000-00', {reverse: false});
  $('#rg').mask("SS-00.000.000", {reverse: false});
  $('#cep').mask("00000-000", {reverse: false});
  $("#celular").mask("(00) 00000-0000");
  $("#placa").mask("SSS-0000");

});





</script>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Novo Transportador </h2><br>
  <form class="form-horizontal" action="add.php" method="post">
    <div class="row">
  <div class="row">
    <div class="form-group col-md-3">
    <label for="nome">Nome: </label>
      <input type="text" class="form-control" placeholder="" name="transportador['nome']" style="width:200">
    </div>
	<div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Sobrenome:</label>
      <input type="text" class="form-control" id="sobrenome" placeholder="" style="width:200">
    </div>
  </div>
    <div class="form-group col-md-3">
      <label for="dt_nascimento">Data de nascimento:</label>
      <input type="date" class="form-control"placeholder="" name="transportador['dt_nascimento']" style="width:200px">
    </div>
    <div class="row">
  <div class="form-group col-md-3">
      <label for="celular">Celular:</label>
      <input type="text" class="form-control" placeholder="Ex.: (00) 0000-0000" name="transportador['celular']" id="celular" style="width:200px">
    </div>
  </div>
  <div class="form-group col-md-3">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name="transportador['cpf']" id="cpf" style="width:200px">
    </div>
  <div class="form-group col-md-3">
      <label for="rg">RG:</label>
      <input type="text" class="form-control" placeholder="" name="transportador['rg']" id="rg" style="width:200px">
    </div>
  </div>
  <div class="row">
  <div class="form-group col-md-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="" name="transportador['email']" style="width:200px">
  </div>
  <div class="form-group col-md-4">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" placeholder="" name="transportador['senha']" style="width:100px">
    </div>
        </div>

</div>

	<div class="row">
	<div class="form-group col-md-5">
	  <fieldset>
		<legend>Endereço</legend>
   <div class="form-group">
    <label class="control-label col-sm-3" style="float: left;">CEP: </label>
    <div class="col-sm-7"><input type="text" class="form-control" id="cep" placeholder="Ex.: 00000-000" name="transportador['cep']" style="width:200px"><br>
    </div>
    <label class="control-label col-sm-3" style="float: left;">Bairro: </label>
    <div class="col-sm-8"><input type="text" class="form-control" placeholder="" name="transportador['bairro']" style="width:300px"><br>
    </div>
    <label class="control-label col-sm-3" style="float: left;">Rua: </label>
    <div class="col-sm-8"><input type="text" class="form-control" placeholder="" name="transportador['rua']" style="width:300px"><br>
    </div>
    <label class="control-label col-sm-3" style="float: left;"> Número: </label>
    <div class="col-sm-6"><input type="text" class="form-control" placeholder="" name="transportador['numero']" style="width:100px"><br>
    </div>
  </div>
    </div><br>
	  <br>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




