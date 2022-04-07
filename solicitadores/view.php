<?php
require_once('functions.php');
if (isset($_GET['idSolicitadores'])){
	$id = $_GET['idSolicitadores'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br>
<h2>Solicitador <?php echo $solicitador['idSolicitadores']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>   
	<dd><?php echo $solicitador['nome']; ?></dd> 
	
	<dt>Sobrenome:</dt>   
	<dd><?php echo $solicitador['sobrenome']; ?></dd> 
	
	<dt>CPF:</dt>   
	<dd><?php echo $solicitador['cpf']; ?></dd> 
</dl>

<dl class="dl-horizontal"> 
	<dt>Celular:</dt>   
	<dd><?php echo $solicitador['celular']; ?></dd> 
	
	<dt>Email:</dt>   
	<dd><?php echo $solicitador['email']; ?></dd> 
	
	<dt>Senha:</dt>   
	<dd><?php echo $solicitador['senha']; ?></dd> 
</dl><br>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="edit.php?idSolicitadores=<?php echo $solicitador['idSolicitadores']; ?>" class="btn btn-primary">Editar</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 