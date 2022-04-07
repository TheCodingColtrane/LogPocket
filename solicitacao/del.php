<?php
require_once('functions.php');

  if (isset($_GET['idSolicitacao'])){
	   delete($_GET['idSolicitacao']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>