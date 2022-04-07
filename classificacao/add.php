<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Nova Classificação</h2><br>
  <form action="add.php" method="post">
	<div class="row">
	<div class="form-group col-md-3">
			Número de Estrelas: <input type="text" class="form-control" placeholder="" name="classificacao['n_estrelas']" style="width:200px">
    </div>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




