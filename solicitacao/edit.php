<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados da Solicitação <?php echo $solicitacao['idSolicitacao'];?> </h2><br>
  <form action="edit.php?idSolicitacao=<?php echo $solicitacao['idSolicitacao'];?>" method="post">
  <div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Foma de pagamento:</label>
		<input type="text" class="form-control" placeholder="" name="solicitacao['forma_pagamento']" style="width:200px" value="<?php echo $solicitacao['forma_pagamento'];?>">
    </div>
	<div class="form-group col-md-3">
     <label for="nome">Data:</label>
		<input type="text" class="form-control" placeholder="" name="solicitacao['data']" style="width:200px" value="<?php echo $solicitacao['data'];?>">
    </div><br>
	</div><br>
	<div class="row">
    <div class="form-group col-md-3">
	  <fieldset>
		<legend>Origem</legend>
			Bairro: <input type="text" class="form-control" placeholder="" name="solicitacao['origem_bairro']" style="width:200px" value="<?php echo $solicitacao['origem_bairro'];?>">
			Rua: <input type="text" class="form-control" placeholder="" name="solicitacao['origem_rua']" style="width:200px" value="<?php echo $solicitacao['origem_rua'];?>">
			Número: <input type="text" class="form-control" placeholder="" name="solicitacao['origem_numero']" style="width:200px" value="<?php echo $solicitacao['origem_numero'];?>">
	  </fieldset>
    </div>
	
	<div class="form-group col-md-3">
	  <fieldset>
		<legend>Destino</legend>
			Bairro: <input type="text" class="form-control" placeholder="" name="solicitacao['destino_bairro']" style="width:200px" value="<?php echo $solicitacao['destino_bairro'];?>">
			Rua: <input type="text" class="form-control" placeholder="" name="solicitacao['destino_rua']" style="width:200px" value="<?php echo $solicitacao['destino_rua'];?>">
			Número: <input type="text" class="form-control" placeholder="" name="solicitacao['destino_numero']" style="width:200px" value="<?php echo $solicitacao['destino_numero'];?>">
	  </fieldset>
    </div><br>
	</div><br>
	
	<div class="row">
	<div class="form-group col-md-3">
    <label for="nome">Id Solicitador:</label>
	<input type="text" class="form-control" placeholder="" name="solicitacao['solicitadores_idSolicitadores']" style="width:200px" value="<?php echo $solicitacao['solicitadores_idSolicitadores'];?>">
    </div><br>
	</div><br>
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




