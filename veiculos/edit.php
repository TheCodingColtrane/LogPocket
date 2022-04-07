<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados do Veículo <?php echo $veiculo['idVeiculo'];?> </h2><br>
  <form action="edit.php?idVeiculo=<?php echo $veiculo['idVeiculo'];?>" method="post">
  <div class="row">
	<div class="form-group col-md-3">
    <label for="nome">Id Transportador:</label>
	<input type="text" class="form-control" placeholder="" name="veiculo['transportadores_idTransportadores']" style="width:200px" value="<?php echo $veiculo['transportadores_idTransportadores'];?>">
    </div><br>
</div><br>
	<div class="row">
    <div class="form-group col-md-3">
	  <fieldset>
			Placa: <input type="text" class="form-control" placeholder="" name="veiculo['placa']" style="width:200px" value="<?php echo $veiculo['placa'];?>">
			Modelo: <input type="text" class="form-control" placeholder="" name="veiculo['modelo']" style="width:200px" value="<?php echo $veiculo['modelo'];?>">
			Chassi: <input type="text" class="form-control" placeholder="" name="veiculo['chassi']" style="width:200px" value="<?php echo $veiculo['chassi'];?>">
			Renavan: <input type="text" class="form-control" placeholder="" name="veiculo['renavan']" style="width:200px" value="<?php echo $veiculo['renavan'];?>">
	  </fieldset>
    </div>
	
	<div class="form-group col-md-3">
	  <fieldset>
			Ano Fabricação: <input type="text" class="form-control" placeholder="" name="veiculo['ano_fabricacao']" style="width:200px" value="<?php echo $veiculo['ano_fabricacao'];?>">
			Número de Portas: <input type="text" class="form-control" placeholder="" name="veiculo['n_portas']" style="width:200px" value="<?php echo $veiculo['n_portas'];?>">
			Número de Assentos: <input type="text" class="form-control" placeholder="" name="veiculo['n_assentos']" style="width:200px" value="<?php echo $veiculo['n_assentos'];?>">
	  </fieldset>
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