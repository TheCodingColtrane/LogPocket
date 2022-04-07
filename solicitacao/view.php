<?php
require_once('functions.php');
if (isset($_GET['idSolicitacao'])){
	$id = $_GET['idSolicitacao'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br>
<h2>Solicitação <?php echo $solicitacao['idSolicitacao']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Data:</dt>   
	<dd><?php echo $solicitacao['data']; ?></dd> 
	
	<dt>Forma de pagamento:</dt>   
	<dd><?php echo $solicitacao['forma_pagamento']; ?></dd> 
	
	<dt>Id Solicitador:</dt>   
	<dd><?php echo $solicitacao['solicitadores_idSolicitadores']; ?></dd> 
</dl>

<dl class="dl-horizontal"> 
	<fieldset>
		<legend>Origem</legend>
		<dt>Bairro:</dt>   
	    <dd><?php echo $solicitacao['origem_bairro']; ?></dd>
		<dt>Rua:</dt>   
	    <dd><?php echo $solicitacao['origem_rua']; ?></dd>
		<dt>Número:</dt>   
	    <dd><?php echo $solicitacao['origem_numero']; ?></dd>
	</fieldset>
		
	<fieldset>
		<legend>Destino</legend>
		<dt>Bairro:</dt>   
	    <dd><?php echo $solicitacao['destino_bairro']; ?></dd>
		<dt>Rua:</dt>   
	    <dd><?php echo $solicitacao['destino_rua']; ?></dd>
		<dt>Número:</dt>   
	    <dd><?php echo $solicitacao['destino_numero']; ?></dd>
	</fieldset>
	
</dl><br>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="edit.php?idSolicitacao=<?php echo $solicitacao['idSolicitacao']; ?>" class="btn btn-primary">Editar</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 