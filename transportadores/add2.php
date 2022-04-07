<?php
require_once('functions.php');
add2();
?>

<?php include(HEADER_TEMPLATE);?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#form").submit(function(){
		e.preventDefault();
		var cont = 0;
		
		$("#form input").each(function(){
			if($(this).val() == "")
			{
				$(this).css({"border" : "1px solid #F00","padding" : "2px"});
				cont++;
				return false;
			}
		});
	});
})
</script>
</head>

<div class="container">
  <br><br><br><h3>Informe seus dados nos campos abaixo:</h3><br>
  <form action="add2.php" method="post" name="form" id="form">
  <div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Nome Completo:</label>
      <input type="text" class="form-control" placeholder="" name="transportador['nome']" style="width:500px">
    </div>
	</div><br>
  <div class="row">
	<div class="form-group col-md-3">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control" name="transportador['cpf']" style="width:200px" id="transportador['cpf']">
    </div>
	<div class="form-group col-md-3">
      <label for="rg">RG:</label>
      <input type="text" class="form-control"placeholder="" name="transportador['rg']" style="width:200px">
    </div>
	<div class="form-group col-md-3">
      <label for="dt_nascimento">Data de nascimento:</label>
      <input type="date" class="form-control"placeholder="" name="transportador['dt_nascimento']" style="width:200px">
    </div>
	<div class="form-group col-md-3">
      <label for="celular">Celular:</label>
      <input type="text" class="form-control" placeholder="Ex.: (00) 0000-0000" name="transportador['celular']" style="width:200px">
    </div><br>
	</div><br>
  <div class="row">
	<div class="form-group col-md-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="" name="transportador['email']" style="width:300px">
    </div>
	<div class="form-groupcol-md-3">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" placeholder="" name="transportador['senha']" style="width:100px">
    </div><br>
  </div>
	<div class="row">
	<div class="form-group col-md-3">
	  <fieldset>
		<legend>Endereço</legend>
			CEP: <input type="text" class="form-control .cep-mask" placeholder="Ex.: 00000-000" name="transportador['cep']" style="width:200px"><br>
			Bairro: <input type="text" class="form-control" placeholder="" name="transportador['bairro']" style="width:300px">
			Rua: <input type="text" class="form-control" placeholder="" name="transportador['rua']" style="width:300px">
			Número: <input type="text" class="form-control" placeholder="" name="transportador['numero']" style="width:100px">
	  </fieldset>
    </div><br>
	</div><br>

	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary" id="b">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




