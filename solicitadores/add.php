<?php
require_once('functions.php');
add();
//add2($_POST['email'], $_POST['senha']);
//add2();
?>
<html> 
<head>
<meta charset="utf-8"> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
</head>
</html>
<script>
$(document).ready(function($){
  $('#cpf').mask('000.000.000-00', {reverse: false});
	
});





</script>

<?php
require_once('functions.php');
add();
//add2($_POST['email'], $_POST['senha']);
//add2();
?>
<html> 
<head>
<meta charset="utf-8"> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/dist/jquery.mask.js"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script>
<script type="text/javascript" src="../jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
</head>
</html>
<script>
$(document).ready(function($){
  $('#cpf').mask('000.000.000-00', {reverse: false});
    
});





</script>

<?php include(HEADER_TEMPLATE);?>
<div class="container">
  <br><br><br><h2>Novo Transportador </h2><br>
  <form class="form-horizontal" action="add.php" method="post">
    <div class="row">
  <div class="row">
    <div class="form-group col-md-3">
    <label for="nome">Nome: </label>
      <input type="text" class="form-control" placeholder="" name="solicitador['nome']" style="width:200px">
    </div>
  <div class="row">
    <div class="form-group col-md-3">
     <label for="SOBREnome">Sobrenome:</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['sobrenome']" style="width:200px">
    </div>
  </div>
    <div class="form-group col-md-3">
      <label for="CPF">CPF</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['cpf']" id="cpf" style="width:200px">
    </div>
    <div class="row">
  <div class="form-group col-md-3">
      <label for="celular">Celular:</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['celular']" id="celular" style="width:200px">
    </div>
  </div>
  <div class="form-group col-md-3">
      <label for="Email">E-mail:</label>
      <input type="email" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" name="solicitador['email']" id="Email" style="width:200px">
    </div>
  <div class="form-group col-md-3">
      <label for="senha">Senha:</label>
      <input type="text" class="form-control" placeholder="" name="solicitador['senha']" id="SENHA" style="width:200px">
    </div>
  </div>
  

  <div id="actions" class="row">
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>
  </form>
</div><br><br>

<?php include(FOOTER_TEMPLATE);?>






