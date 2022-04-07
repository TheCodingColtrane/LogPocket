<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Novo Item</h2><br>
  <form action="add.php" method="post">
  	
<div class="row">
	<div class="form-group col-md-3">
    <label for="nome">Id Solicitação:</label>
	<input type="text" class="form-control" placeholder="" name="item['solicitacao_idSolicitacao']" style="width:200px">
    </div><br>
</div><br>

    <div class="form-group col-md-3">
	  <fieldset>
			Descrição: <input type="text" class="form-control" placeholder="" name="item['descricao']" style="width:200px">
			Quantidade: <input type="text" class="form-control" placeholder="" name="item['quantidade']" style="width:200px">
			Dimensões: <input type="text" class="form-control" placeholder="" name="item['dimensoes']" style="width:200px">
	  </fieldset>
    </div>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




<p>
  <label>Feet</label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>
<p>Meters: <span id="outputMeters"></span></p>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputMeters").innerHTML=valNum/3.2808;
}
</script>
</body>
</html>
