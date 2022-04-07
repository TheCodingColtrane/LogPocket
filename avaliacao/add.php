<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Nova Avaliação</h2><br>
  <form action="add.php" method="post">
	<div class="row">
    <div class="form-group col-md-3">
	  <fieldset>
			Id Solicitador: <input type="text" class="form-control" placeholder="" name="avaliacao['solicitadores_idSolicitadores']" style="width:200px">
			Id Transportador: <input type="text" class="form-control" placeholder="" name="avaliacao['transportadores_idTransportadores']" style="width:200px">
	  </fieldset>
    </div>
	
	<div class="form-group col-md-3">
	  <fieldset>
			Nota: <input type="text" class="form-control" placeholder="" name="avaliacao['nota']" style="width:200px">
			Comentário: <input type="text" class="form-control" placeholder="" name="avaliacao['comentario']" style="width:200px">
	  </fieldset>
    </div><br>
	</div><br>
	<div class="form-group col-md-3">
			Id Classificação: <input type="text" class="form-control" placeholder="" name="avaliacao['classificacao_idClassificacao']" style="width:200px">
    </div>
	<div class="form-group col-md-3">
			Id Entrega: <input type="text" class="form-control" placeholder="" name="avaliacao['entrega_idEntrega']" style="width:200px">
    </div>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




