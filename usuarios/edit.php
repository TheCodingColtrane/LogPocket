<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados do Usuário <?php echo $usuario['idUsuario'];?> </h2><br>
  <form action="edit.php?idUsuario=<?php echo $usuario['idUsuario'];?>" method="post">
  <div class="form-group col-md-3">
			Email: <input type="email" class="form-control" placeholder="" name="usuario['email']" style="width:200px" value="<?php echo $usuario['email'];?>">
			Senha: <input type="password" class="form-control" placeholder="" name="usuario['senha']" style="width:200px" value="<?php echo $usuario['senha'];?>"><br>
			Tipo: <input type="text" class="form-control" placeholder="" name="usuario['tipo']" style="width:200px" value="<?php echo $usuario['tipo'];?>">
</div><br>
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




