<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados do Item <?php echo $item['idItens'];?> </h2><br>
  <form action="edit.php?idItens=<?php echo $item['idItens'];?>" method="post">
 
 <div class="row">
	<div class="form-group col-md-3">
    <label for="nome">Id Solicitação:</label>
	<input type="text" class="form-control" placeholder="" name="item['solicitacao_idSolicitacao']" style="width:200px"  value="<?php echo $item['solicitacao_idSolicitacao'];?>">
    </div><br>
</div><br>

    <div class="form-group col-md-3">
	  <fieldset>
			Descrição: <input type="text" class="form-control" placeholder="" name="item['descricao']" style="width:200px" value="<?php echo $item['descricao'];?>">
			Quantidade: <input type="text" class="form-control" placeholder="" name="item['quantidade']" style="width:200px" value="<?php echo $item['quantidade'];?>">
			Dimensões: <input type="text" class="form-control" placeholder="" name="item['dimensoes']" style="width:200px" value="<?php echo $item['dimensoes'];?>">
	  </fieldset>
    </div>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




