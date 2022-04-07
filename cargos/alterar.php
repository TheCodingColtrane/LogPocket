<?php
require_once('cargo.php');
alterar();
$dados = listarcargo($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>
<br><br><h2>Atualizar Entrega <?php echo $dados['idEntrega']; ?></h2>
<form action="alterar.php?id=<?php echo $dados['idEntrega']; ?>" method="post">
<hr />
<div class="row">
<div class="form-group col-md-7">
<label for="name">ID de Entrega</label>
<input type="text" class="form-control" name="idEntrega" value="<?php echo $dados['idEntrega']; ?>">
<label for="name">Preço</label>
<input type="text" class="form-control" name="preco" value="<?php echo $dados['preco']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Data de saída</label>
<input type="text" class="form-control" name="dt_saida" value="<?php echo $dados['dt_saida']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Data de chegada</label>
<input type="text" class="form-control" name="dt_chegada" value="<?php echo $dados['dt_chegada']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Hora de saída</label>
<input type="text" class="form-control" name="hr_saida" value="<?php echo $dados['hr_saida']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Hora de chegada</label>
<input type="text" class="form-control" name="hr_chegada" value="<?php echo $dados['hr_chegada']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Id Solicitação</label>
<input type="text" class="form-control" name="solicitacao_idSolicitacao" value="<?php echo $dados['solicitacao_idSolicitacao']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Id Transportador</label>
<input type="text" class="form-control" name="transportadores_idTransportadores" value="<?php echo $dados['transportadores_idTransportadores']; ?>">
</div>
<div class="form-group col-md-7">
<label for="name">Id Veículo</label>
<input type="text" class="form-control" name="veiculos_idVeiculo" value="<?php echo $dados['veiculos_idVeiculo']; ?>">
</div>
</div>
</div>

<div id="actions" class="row">
<div class="col-md-12">
<button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
<a href="index.php" class="btn btn-default">Cancelar</a>
</div>
</div>
</form>
<?php include(FOOTER_TEMPLATE); ?>