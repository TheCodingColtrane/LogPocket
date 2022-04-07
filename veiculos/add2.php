<?php
require_once('functions.php');
add2();
?>

<?php include(HEADER_TEMPLATE);?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
$(document).ready( function() {
  $('#seguro').bind(function () { 
    if( $('#seguro').val() == 'Sim') {
      $('#decision').show();
    }
    else if( $('#seguro').val() == 'Não') {
      $('#decision').hide();
    }         
  });
});

    .select-estiloso { /* <div> */
       width: 100px;
       height: 34px;
       overflow: hidden;
       background: url(nova_setinha.jpg) no-repeat right #ddd; /* novo ícone para o <select> */
       border: 1px solid #ccc;
    }   

    .select-estiloso select { /* <select> */
       background: transparent; /* importante para exibir o novo ícone */
       width: 268px;
       padding: 5px;
       font-size: 16px;
       line-height: 1;
       border: 0;
       border-radius: 0;
       height: 34px;
       -webkit-appearance: none;
    }      
</style>
<div class="container">
  <br><br><br><h3>Dados do veículo que será utilizado:</h3><br>
  <form action="add2.php" method="post">
<div class="row">
	<div class="form-group col-md-6">
    <label for="nome">Id Transportador:</label>
	<input type="text" class="form-control" placeholder="" name="veiculo['transportadores_idTransportadores']" style="width:200px">
    </div>
</div><br>
	<div class="row">
    <div class="form-group col-md-3">
	  <fieldset>
			Placa: <input type="text" class="form-control" placeholder="Ex.: PLA-0000" name="veiculo['placa']" style="width:200px">
			Modelo: <input type="text" class="form-control" placeholder="" name="veiculo['modelo']" style="width:200px">
			Marca: <input type="text" class="form-control" placeholder="" name="veiculo['modelo']" style="width:200px">
			Chassi: <input type="text" class="form-control" placeholder="" name="veiculo['chassi']" style="width:200px">
			Renavam: <input type="text" class="form-control" placeholder="" name="veiculo['renavan']" style="width:200px">
	  </fieldset>
    </div>
	
	<div class="form-group col-md-3">
	  <fieldset>
			Ano Fabricação: <input type="text" class="form-control" placeholder="" name="veiculo['ano_fabricacao']" style="width:200px">
			Número de Portas: <input type="text" class="form-control" placeholder="" name="veiculo['n_portas']" style="width:200px">
			Número de Assentos: <input type="text" class="form-control" placeholder="" name="veiculo['n_assentos']" style="width:200px">
	  </fieldset>
    </div><br>
	</div><br>

<div class="row">
<div class="form-group col-md-3">	
	<h4>Possui Seguro?</h4><div class="select-estiloso" id="seguro" name="seguro">
<select id="seguro" name="seguro">
   <option value="1">Sim</option>
   <option value="2">Não</option>
</select>
	  </div>
	  </div><br>
	  
	  <div id="decision" name="decision">
	  <div class="form-group col-md-3">
	  <fieldset>
			Nome da Aseguradora: <input type="text" class="form-control" placeholder="" name="" style="width:200px">
			Número da Apólice: <input type="text" class="form-control" placeholder="" name="" style="width:200px">
			Vigência: <input type="text" class="form-control" placeholder="" name="" style="width:200px">
			Área de Cobertura: <input type="text" class="form-control" placeholder="" name="" style="width:200px">
	  </fieldset>
    </div><br></div>
	
</div></br>


	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




