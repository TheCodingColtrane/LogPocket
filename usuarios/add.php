<?php
require_once('functions.php');
add();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Nova Usuário </h2><br>
  <form action="add.php" method="post">
    <div class="form-group col-md-3">
			Email: <input type="email" class="form-control" placeholder="" name="usuario['email']" style="width:200px">
			Senha: <input type="password" class="form-control" placeholder="" name="usuario['senha']" style="width:200px"><br>
			<select name="usuario['tipo']">
				<option value="2">Solicitador</option>
				<option value="3">Transportador</option>
			</select>
    </div>
	
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




