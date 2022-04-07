<?php
require_once('functions.php');
if (isset($_GET['idUsuario'])){
	$id = $_GET['idUsuario'];
} else{$id = null;}

view($id);
?>

<?php include(HEADER_TEMPLATE); ?> 
<br><br><br>
<h2>Usuário <?php echo $usuario['idUsuario']; ?></h2> 
<hr>

<?php if (!empty($_SESSION['message'])) : ?> 
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div> 
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Email:</dt>   
	<dd><?php echo $usuario['email']; ?></dd> 
	
	<dt>Senha:</dt>   
	<dd><?php echo $usuario['senha']; ?></dd> 
	
	<dt>Tipo:</dt>   
	<dd><?php echo $usuario['tipo']; ?></dd> 
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="edit.php?idUsuario=<?php echo $usuario['idUsuario']; ?>" class="btn btn-primary">Editar</a>
	<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div><br><br><br>

<?php include(FOOTER_TEMPLATE); ?> 