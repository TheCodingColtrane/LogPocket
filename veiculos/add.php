<?php
require_once('functions.php');
add();
?>
<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Novo Veículo </h2><br>
  <form action="add.php" method="post">
	<div class="row">
    <div class="form-group col-md-12">
    	<form class="form-horizontal" action="add.php" method="post">
    <div class="row">
    <div class="form-group col-md-3">
    <label for="nome">Placa: </label>
      <input type="text" class="form-control" placeholder="" name="veiculo['placa']" style="width:200px">
    </div>
    <div class="form-group col-md-3">
     <label for="nome">Modelo:</label>
      <input type="text" class="form-control" id="modelo" placeholder="" nmme="veiculo['modelo']" style="width:200px">
    </div>
    <div class="form-group col-md-3">
      <label for="dt_nascimento">Chassi:</label>
      <input type="text" class="form-control" placeholder="" name=veiculo['chassi'] id="data" style="width:200px">
    </div>
    <div class="row">
  <div class="form-group col-md-3">
      <label for="celular">Renavan:</label>
      <input type="text" class="form-control" placeholder="Ex.: (00) 0000-0000" name=veiculo['renavan'] id="renavan" style="width:200px">
    </div>
  </div>
  <div class="form-group col-md-3">
      <label for="cpf">Ano de fabricação:</label>
      <input type="date" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name=veiculo['ano_fabricacao'] id="ano" style="width:160px">
    </div>
  <div class="form-group col-md-3">
      <label for="rg">Número de portas:</label>
      <input type="number" class="form-control" placeholder="" name="veiculo['n_portas]" id="portas" style="width:150px">
    </div>
    <div class="row">
  <div class="form-group col-md-3">
      <label for="email">Número de assentos:</label>
      <input type="number" class="form-control" placeholder="" name="veiculo['n_assentos']" id=assentos style="width:150px">
  </div>

        </div>

        </div>
  
  

</div>
	</div><br>

  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>





