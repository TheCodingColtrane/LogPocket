<?php
require_once('cargo.php');
$dados = listarcargos();
?>
<?php include(HEADER_TEMPLATE); ?>
<header>
<div class="row">
<div class="col-sm-6">
<br><br><br><h2>Entregas</h2>
</div>
<div class="col-sm-6 text-right h2"><br><br><br>
<a class="btn btn-primary" href="cadastrar.php"><i class="fa fa-plus"></i> Nova entrega</a>
<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
</div>
</div>
</header>
<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
<?php echo $_SESSION['message']; ?>
</div>

<?php endif; ?>
<hr>
<table class="table table-hover">
<thead>
<tr>
<th>ID de entrega</th>
<th>Preço</th>
<th>Data de saída</th>
<th>Data de chegada</th>
<th>Hora de saída</th>
<th>Hora de chegada</th>
</tr>
</thead>
<tbody>
<?php if ($dados) : ?>
<?php foreach ($dados as $cargo) : ?>
<tr>
<td><?php echo $cargo['idEntrega']; ?></td>
<td><?php echo $cargo['preco']; ?></td>
<td><?php echo $cargo['dt_saida']; ?></td>
<td><?php echo $cargo['dt_chegada']; ?></td>
<td><?php echo $cargo['hr_saida']; ?></td>
<td><?php echo $cargo['hr_chegada']; ?></td>
<td class="actions text-right">
<a href="visualizar.php?id=<?php echo $cargo['idEntrega']; ?>" class="btn btn-sm btn-success">
<i class="fa fa-eye"></i> Visualizar</a>
<a href="alterar.php?id=<?php echo $cargo['idEntrega']; ?>" class="btn btn-sm btn-warning">
<i class="fa fa-pencil"></i> Editar</a>
<a href="excluir.php?id=<?php echo $cargo['idEntrega']; ?>" class="btn btn-sm btn-danger">
<i class="fa fa-trash"></i> Excluir
</a>
</td>
</tr>
<?php endforeach; ?>
<?php else : ?>
<tr>
<td colspan="6">Nenhum registro encontrado.</td>
</tr>
<?php endif; ?>
</tbody>
</table>
<?php include(FOOTER_TEMPLATE); ?>