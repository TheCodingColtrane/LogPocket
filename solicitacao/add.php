<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Nova Solicitação </h2><br>
  <form action="add.php" method="post">
  <div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Foma de pagamento:</label>
		<input type="text" class="form-control" placeholder="" name="solicitacao['forma_pagamento']" style="width:200px">
    </div><br>
	</div><br>
	<div class="row">
    <div class="form-group col-md-3">
	  <fieldset>
		<legend>Origem</legend>
			Bairro: <input type="text" class="form-control" placeholder="" name="solicitacao['origem_bairro']" style="width:200px">
			Rua: <input type="text" class="form-control" placeholder="" name="solicitacao['origem_rua']" style="width:200px">
			Número: <input type="text" class="form-control" placeholder="" name="solicitacao['origem_numero']" style="width:200px">
	  </fieldset>
    </div>
	
	<div class="form-group col-md-3">
	  <fieldset>
		<legend>Destino</legend>
			Bairro: <input type="text" class="form-control" placeholder="" name="solicitacao['destino_bairro']" style="width:200px">
			Rua: <input type="text" class="form-control" placeholder="" name="solicitacao['destino_rua']" style="width:200px">
			Número: <input type="text" class="form-control" placeholder="" name="solicitacao['destino_numero']" style="width:200px">
	  </fieldset>
    </div><br>
	</div><br>
	
	<div class="row">
	<div class="form-group col-md-3">
    <label for="nome">Id Solicitador:</label>
	<input type="text" class="form-control" placeholder="" name="solicitacao['solicitadores_idSolicitadores']" style="width:200px">
    </div><br>
	</div><br>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




