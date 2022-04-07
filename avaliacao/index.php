<?php
	require_once('functions.php');
	index();
	?>
	
	<?php include (HEADER_TEMPLATE); "<br><br>"?>
	
<header>
	<div class="row">
		<div class="col-sm-6">
			<br><br><br><h2>Avaliações</h2>
		</div>
		<div class="col-sm-6 text-right h2"><br><br><br>
		<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Adicionar Avaliação</a>
		</div>
	</div>
</header>


<?php /*exibir alguma notificação que tenha sido definida no backend, como mensagens de erro ou de sucesso*/ 
	if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert"> 
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&<?php echo $_SESSION['message']; ?>
	<?php echo $_SESSION['message']; ?>
	</div>
	
<?php endif; ?>

<hr>

<table class= "table table-hover">
<thead>
	<tr>
		<th>Id</th>
		<th>Id do Solicitador</th>
		<th>Id do Transportador</th>
		<th>Data</th>
		<th>Comentário</th>
		<th></th>
	<tr>
</thead>

<tbody>
<?php if($avaliacoes):?>
<?php /*pega cada registro da variável $Solicitadores e criar uma linha nessa tabela e exibir os dados*/ 
	foreach ($avaliacoes as $avaliacao) : ?> 
<form method="get">
	<tr>
		<td><?php echo $avaliacao['idAvaliacao']; ?></td>
		<td><?php echo $avaliacao['solicitadores_idSolicitadores']; ?></td>
		<td><?php echo $avaliacao['transportadores_idTransportadores']; ?></td>
		<td><?php echo $avaliacao['data']; ?></td>
		<td><?php echo $avaliacao['comentario']; ?></td>
		<td class="actions text-right">
			 <a href="view.php?idAvaliacao=<?php echo $avaliacao['idAvaliacao']; ?>" class="btn btn-sm btn-success"> 
			 <i class="fa fa-eye"></i> Visualizar</a> 
			 <a href="edit.php?idAvaliacao=<?php echo $avaliacao['idAvaliacao']; ?>" class="btn btn-sm btn-warning">
			 <i class="fa fa-pencil"></i> Editar</a>
			 <a href="delete.php?idAvaliacao=<?php echo $avaliacao['idAvaliacao']; ?>" class="btn btn-sm btn-danger">
			 <i class="fa fa-trash"></i> Excluir </a>
			
		</td>
	</tr>
	</form>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td> 
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php //5include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE);?>
	