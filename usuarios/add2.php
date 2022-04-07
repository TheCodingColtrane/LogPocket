<?php
require_once('functions.php');
add2();
?>

<?php include(HEADER_TEMPLATE);?>
<script type="text/javascript" src="javascript.js"></script>
<div class="container">
  <br><br><br><h2>Novo Usuário </h2><br>
  <form action="add2.php" method="post" id="form" name="form" onSubmit="return validacao();">
  <div class="row">
    <div class="form-group col-md-3">
			Email: <input type="email" class="form-control" placeholder="" name="usuario['email']" style="width:200px">
			Senha: <input type="password" class="form-control" placeholder="" name="usuario['senha']" style="width:200px"><br>
    </div>
</div>	
	
  <div id="actions" class="row">
  <div class="col-md-12"> 
	<button  type="submit" id="solicitador" name="solicitador" class="btn btn-primary">Solicitador</button>
    <button type="submit" id="transportador" name="transportador" class="btn btn-primary">Transportador</button>
	</div>
  </div>
  </form>
  

</div><br><br>

<?php include(FOOTER_TEMPLATE);?>
<?php
			/*<select name="usuario['tipo']">
				<option value="2">Solicitador</option>
				<option value="3">Transportador</option>
			</select>*/
?>