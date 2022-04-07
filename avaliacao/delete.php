<?php
require_once('functions.php');

if (isset($_GET['idAvaliacao'])){
	$id = $_GET['idAvaliacao'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br><label>Para excluir esta avaliação clique em CONFIRMAR</label><br><br>
<h2>Avaliação <?php echo $avaliacao['idAvaliacao']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Data:</dt>   
	<dd><?php echo $avaliacao['data']; ?></dd> 
	
	<dt>Classificação:</dt>   
	<dd><?php echo $avaliacao['classificacao_idClassificacao']." estrelas."; ?></dd> 	
</dl>

<dl class="dl-horizontal"> 
	<fieldset>
		<dt>Id Solicitador:</dt>   
	    <dd><?php echo $avaliacao['solicitadores_idSolicitadores']; ?></dd>
		<dt>Id Transportador:</dt>   
	    <dd><?php echo $avaliacao['transportadores_idTransportadores']; ?></dd>
	</fieldset>
		
	<fieldset>
		<dt>Nota:</dt>   
	    <dd><?php echo $avaliacao['nota']; ?></dd>
		<dt>Comentário:</dt>   
	    <dd><?php echo $avaliacao['comentario']; ?></dd>
	</fieldset>
</dl><br>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="del.php?idAvaliacao=<?php echo $avaliacao['idAvaliacao']; ?>" class="btn btn-primary">CONFIRMAR</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 
	   
	  