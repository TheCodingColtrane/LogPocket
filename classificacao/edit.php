<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados da Classificação <?php echo $classificacao['idClassificacao'];?> </h2><br>
  <form action="edit.php?idClassificacao=<?php echo $classificacao['idClassificacao'];?>" method="post">
<div class="row">
	 <div class="form-group col-md-3">
			Número de Estrelas: <input type="text" class="form-control" placeholder="" name="classificacao['n_estrelas']" style="width:200px"  value="<?php echo $classificacao['n_estrelas'];?>">
    </div>
 </div>
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




