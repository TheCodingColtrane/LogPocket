<?php
require_once('functions.php');

if (isset($_GET['idVeiculo'])){
	$id = $_GET['idVeiculo'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br><label>Para excluir este veículo clique em CONFIRMAR</label><br><br>
<h2>Veículo <?php echo $veiculo['idVeiculo']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Id Transportador:</dt>   
	<dd><?php echo $veiculo['transportadores_idTransportadores']; ?></dd>  
</dl>

<dl class="dl-horizontal"> 
	<fieldset>
		<dt>Placa:</dt>   
	    <dd><?php echo $veiculo['placa']; ?></dd>
		<dt>Modelo:</dt>   
	    <dd><?php echo $veiculo['modelo']; ?></dd>
		<dt>Chassi:</dt>   
	    <dd><?php echo $veiculo['chassi']; ?></dd>
		<dt>Renavan:</dt>   
	    <dd><?php echo $veiculo['renavan']; ?></dd>
	</fieldset>
		
	<fieldset>
		<dt>Ano Fabricação:</dt>   
	    <dd><?php echo $veiculo['ano_fabricacao']; ?></dd>
		<dt>Número de Portas:</dt>   
	    <dd><?php echo $veiculo['n_portas']; ?></dd>
		<dt>Número de Assentos:</dt>   
	    <dd><?php echo $veiculo['n_assentos']; ?></dd>
	</fieldset>
	
</dl><br>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="del.php?idVeiculo=<?php echo $veiculo['idVeiculo']; ?>" class="btn btn-primary">CONFIRMAR</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 
	   
	  