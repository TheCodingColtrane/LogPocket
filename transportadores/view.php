<?php
require_once('functions.php');
if (isset($_GET['idTransportadores'])){
	$id = $_GET['idTransportadores'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br>
<h2>Transportador <?php echo $transportador['idTransportadores']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>   
	<dd><?php echo $transportador['nome']; ?></dd> 
	
	<dt>CPF:</dt>   
	<dd><?php echo $transportador['cpf']; ?></dd> 
	
	<dt>RG:</dt>   
	<dd><?php echo $transportador['cpf']; ?></dd>

	<dt>Data de nascimento:</dt>   
	<dd><?php echo $transportador['dt_nascimento']; ?></dd>

</dl>

<dl class="dl-horizontal"> 
	<dt>Celular:</dt>   
	<dd><?php echo $transportador['celular']; ?></dd> 
	
	<dt>Email:</dt>   
	<dd><?php echo $transportador['email']; ?></dd> 
	
	<dt>Senha:</dt>   
	<dd><?php echo $transportador['senha']; ?></dd> 
</dl><br>

<dl class="dl-horizontal"> 
	<fieldset>
		<legend>Endereço</legend>
		<dt>CEP:</dt>   
	    <dd><?php echo $transportador['cep']; ?></dd>
		<dt>Bairro:</dt>   
	    <dd><?php echo $transportador['bairro']; ?></dd>
		<dt>Rua:</dt>   
	    <dd><?php echo $transportador['rua']; ?></dd>
		<dt>Número:</dt>   
	    <dd><?php echo $transportador['numero']; ?></dd>
	</fieldset>
</dl><br>

<dl class="dl-horizontal"> 
	<fieldset>
		<dt>Classificação:</dt>   
	    <dd><?php echo $transportador['classificacao_idClassificacao']; ?></dd>
	</fieldset>
</dl><br>


<div id="actions" class="row">
	<div class="col-md-12">
	<a href="edit.php?id=<?php echo $transportador['idTransportadores']; ?>" class="btn btn-primary">Editar</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 