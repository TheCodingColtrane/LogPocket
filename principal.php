<?php require_once('config.php');?>
<?php require_once(DBAPI);?>
<?php require_once('validaadmin.php');?>


<?php include(HEADER_TEMPLATE); ?>
<?php
	$db = open_database();?>
<br><br><br><h1>Painel de Controle</h1>  <hr/>
<?php if ($db) : ?>  
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<table>
	<tr><td width="160">
	<form action="solicitadores/index.php">
	<button type="submit" class="btn btn-primary btn-lg">Solicitadores</button>
	</form></td>
	<td width="150">
	<form action="solicitacao/index.php">
	 <button type="submit" class="btn btn-primary btn-lg" >Solicitações</button>
	</form></td>
	<td width="95">
	<form action="itens/index.php">
	<button type="submit" class="btn btn-primary btn-lg" >Itens</button>
	</form></td>
	<td width="185">
	<form  action="transportadores/index.php">
	<button type="submit" class="btn btn-primary btn-lg">Transportadores</button>
	</form></td>
	<td width="150">
	<form  action="veiculos/index.php">
	<button type="submit" class="btn btn-primary btn-lg" >Veículos</button>
	</form></td>
</tr></table><br><br>
<table><tr>
	<td width="130">
	<form  action="cargos/index.php">
	<button type="submit" class="btn btn-primary btn-lg" >Entregas</button>
	</form></td>
	<td width="140">
	<form  action="avaliacao/index.php">
	 <button type="submit" class="btn btn-primary btn-lg" >Avaliações</button>
	</form></td>
	<td width="170">
	<form  action="classificacao/index.php">
	 <button type="submit" class="btn btn-primary btn-lg" >Classificações</button>
	</form></td>
	<td width="170">
	<form  action="Rastreamento/index.php">
	<button type="submit" class="btn btn-primary btn-lg">Rastreamentos</button>
	</form></td>
	<td width="150">
	<form  action="usuarios/index.php">
	<button type="submit" class="btn btn-primary btn-lg">Usuarios</button>
	</form></td>
</tr>
</table>     
</div><br><br><br>
<table>
<tr><td><div class="form-group col-md-12"></div>
<div class="form-group col-md-12"></div>
<div class="form-group col-md-12"></div>
<div class="form-group col-md-12"></div>
<td>
	<form  action="logout.php">
	<button type="submit" class="btn btn-danger btn-lg">SAIR</button>
	</form></td>
	
</tr></table><br><br>

</body>

<?php else : ?>   
<div class="alert alert-danger" role="alert">
<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>   
</div> 

<?php endif; ?>  
<?php include(FOOTER_TEMPLATE); ?> 