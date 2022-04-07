<?php
require_once('functions.php');

if (isset($_GET['idItens'])){
	$id = $_GET['idItens'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br><label>Para excluir este item clique em CONFIRMAR</label><br><br>
<h2>Item <?php echo $item['idItens']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Id Solicitação:</dt>   
	<dd><?php echo $item['solicitacao_idSolicitacao']; ?></dd> 
</dl>

<dl class="dl-horizontal"> 
	<fieldset>
		<dt>Descrição:</dt>   
	    <dd><?php echo $item['descricao']; ?></dd>
		<dt>Quantidade:</dt>   
	    <dd><?php echo $item['quantidade']; ?></dd>
		<dt>Dimensões:</dt>   
	    <dd><?php echo $item['dimensoes']; ?></dd>
	</fieldset>
</dl><br>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="del.php?idItens=<?php echo $item['idItens']; ?>" class="btn btn-primary">CONFIRMAR</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 
	   
	  