<?php
require_once('functions.php');
edit();
?>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Atualizar dados do Transportador <?php echo $transportador['idTransportadores'];?> </h2><br>
  <form action="edit.php?idTransportadores=<?php echo $transportador['idTransportadores'];?>" method="post">
  <div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Nome Completo:</label>
      <input type="text" class="form-control" placeholder="" name="transportador['nome']" style="width:500px" value="<?php echo $transportador['nome'];?>"> 
    </div>
	</div><br>
  <div class="row">
	<div class="form-group col-md-3">
      <label for="cpf">CPF:</label>
      <input type="text" class="form-control"placeholder="" name="transportador['cpf']" style="width:200px" value="<?php echo $transportador['cpf'];?>">
    </div>
	<div class="form-group col-md-3">
      <label for="rg">RG:</label>
      <input type="text" class="form-control"placeholder="" name="transportador['rg']" style="width:200px" value="<?php echo $transportador['rg'];?>">
    </div>
	<div class="form-group col-md-3">
      <label for="dt_nascimento">Data de nascimento:</label>
      <input type="text" class="form-control"placeholder="" name="transportador['dt_nascimento']" style="width:200px" value="<?php echo $transportador['dt_nascimento'];?>">
    </div>
	<div class="form-group col-md-3">
      <label for="celular">Celular:</label>
      <input type="text" class="form-control" placeholder="" name="transportador['celular']" style="width:200px" value="<?php echo $transportador['celular'];?>">
    </div><br>
	</div><br>
  <div class="row">
	<div class="form-group col-md-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="" name="transportador['email']" style="width:300px" value="<?php echo $transportador['email'];?>">
    </div>
	<div class="form-groupcol-md-3">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" placeholder="" name="transportador['senha']" style="width:100px" value="<?php echo $transportador['senha'];?>">
    </div><br>
  </div>
	<div class="row">
	<div class="form-group col-md-3">
	  <fieldset>
		<legend>Endereço</legend>
			CEP: <input type="text" class="form-control" placeholder="" name="transportador['cep']" style="width:200px" value="<?php echo $transportador['cep'];?>"><br>
			Bairro: <input type="text" class="form-control" placeholder="" name="transportador['bairro']" style="width:300px" value="<?php echo $transportador['bairro'];?>">
			Rua: <input type="text" class="form-control" placeholder="" name="transportador['rua']" style="width:300px" value="<?php echo $transportador['rua'];?>">
			Número: <input type="text" class="form-control" placeholder="" name="transportador['numero']" style="width:100px" value="<?php echo $transportador['numero'];?>">
	  </fieldset>
	  </div>
    </div><br>
	  <div class="row">
    <div class="form-group col-md-3">
     <label for="nome">Classificação:</label>
      <input type="text" class="form-control" placeholder="" name="transportador['classificacao_idClassificacao']" style="width:50px" value="<?php echo $transportador['classificacao_idClassificacao'];?>"> 
    </div>
	</div><br>
  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
	</div>
  </div>
  </form>
  </div>
<br><br>

<?php include(FOOTER_TEMPLATE);?>




