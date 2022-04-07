<?php
require_once('functions.php');
if (isset($_GET['idClassificacao'])){
	$id = $_GET['idClassificacao'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br><label>Para excluir esta classificação clique em CONFIRMAR</label><br><br>
<br><br><br>
<h2>Classificação <?php echo $classificacao['idClassificacao']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Classificação:</dt>   
	<dd><?php echo $classificacao['n_estrelas']." estrelas."; ?></dd> 	
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="del.php?idClassificacao=<?php echo $classificacao['idClassificacao']; ?>" class="btn btn-primary">CONFIRMAR</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 
	   
	  