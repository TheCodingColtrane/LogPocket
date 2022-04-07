<?php
require_once('cargo.php');
if (isset($_GET['id']))
$cargo = listarcargo($_GET['id']);
else
header("location:index.php");
?>
<?php include(HEADER_TEMPLATE); ?>
<h2>Cliente <?php echo $cargo['idEntrega']; ?></h2>
<hr>
<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
<dl class="dl-horizontal">
<dt>ID de Entrega:</dt>
<dd><?php echo $cargo['idEntrega']; ?></dd>
<dt>Preço:</dt>
<dd><?php echo $cargo['preco']; ?></dd>
<dt>Data de saída:</dt>
<dd><?php echo $cargo['dt_saida']; ?></dd>
<dt>data entrada:</dt>
<dd><?php echo $cargo['dt_chegada']; ?></dd>
<dt>Hora de saída:</dt>
<dd><?php echo $cargo['hr_saida']; ?></dd>
<dt>Hora de entrada:</dt>
<dd><?php echo $cargo['hr_chegada']; ?></dd>
<dt>Id Solicitação:</dt>
<dd><?php echo $cargo['solicitacao_idSolicitacao']; ?></dd>
<dt>Id Transportador:</dt>
<dd><?php echo $cargo['transportadores_idTransportadores']; ?></dd>
<dt>Id Veículo:</dt>
<dd><?php echo $cargo['veiculos_idVeiculo']; ?></dd>
</dl>
<div id="actions" class="row">
<div class="col-md-12">
<a href="alterar.php?id=<?php echo $cargo['idEntrega']; ?>" class="btn btn-primary">Editar</a>
<a href="index.php" class="btn btn-default">Voltar</a>
</div>
</div>
<?php include(FOOTER_TEMPLATE); ?>