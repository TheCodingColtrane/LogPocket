<?php
require_once('cargo.php');
inserir();
?>
<?php include(HEADER_TEMPLATE); ?>
<br><br><h2>Novo Entrega</h2>
<form action="cadastrar.php" method="post">
<!-- area de campos do form -->
<hr />
<div class="container">
<div class="row">
<div class="form-group col-md-7">
<label for="name">Preço</label>
<input type="text" class="form-control" name="preco" style="width:200px">
</div>
<div class="form-group col-md-7">
<label for="name">Data de saída</label>
<input type="date" class="form-control" name="dt_saida" style="width:200px">
</div>
<div class="form-group col-md-7">
<label for="name">Data de chegada</label>
<input type="date" class="form-control" name="dt_chegada" style="width:200px">
</div>
<div class="form-group col-md-7">
<label for="name">Hora de saída</label>
<input type="time" class="form-control" name="hr_saida" style="width:200px">
</div>
<div class="form-group col-md-7">
<label for="name">Hora de entrega</label>
<input type="time" class="form-control" name="hr_chegada" style="width:200px">
</div>
</div>
<div class="row">
<div class="form-group col-md-7">
<label for="name">Id Solicitação:</label>
<input type="text" class="form-control" name="solicitacao_idSolicitacao" style="width:200px">
</div>
<div class="form-group col-md-7">
<label for="name">Id Transportador:</label>
<input type="text" class="form-control" name="transportadores_idTransportadores" style="width:200px">
</div>
<div class="form-group col-md-7">
<label for="name">Id Veículo:</label>
<input type="text" class="form-control" name="veiculos_idVeiculo" style="width:200px">
</div>
</div>
<div id="actions" class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
<a href="index.php" class="btn btn-default">Cancelar</a>
</div>
</div>
</div>
</form><br><br>
<?php include(FOOTER_TEMPLATE); ?>
