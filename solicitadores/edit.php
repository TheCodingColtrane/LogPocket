<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados do Solicitador </h2><br><?php echo $solicitador['idSolicitadores'];?>
  <form action="edit.php?idSolicitadores=<?php echo $solicitador['idSolicitadores'];?>" method="post">
  <div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Nome:</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['nome']" style="width:200px" value="<?php echo $solicitador['nome'];?>">
    </div>
    <div class="form-group col-md-3">
      <label for="sobrenome">Sobrenome:</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['sobrenome']" style="width:200px" value="<?php echo $solicitador['sobrenome'];?>">
    </div><br>
	</div><br>
  <div class="row">
	<div class="form-group col-md-3">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control"placeholder="" name="solicitador['cpf']" style="width:200px" value="<?php echo $solicitador['cpf'];?>">
    </div>
	<div class="form-group col-md-3">
      <label for="celular">Celular:</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['celular']" style="width:200px" value="<?php echo $solicitador['celular'];?>">
    </div><br>
	</div><br>
  <div class="row">
	<div class="form-group col-md-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="" name="solicitador['email']" style="width:300px" value="<?php echo $solicitador['email'];?>">
    </div>
	<div class="form-groupcol-md-3">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" placeholder="" name="solicitador['senha']" style="width:100px" value="<?php echo $solicitador['senha'];?>">
    </div><br>
  </div>
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>




