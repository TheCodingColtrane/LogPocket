<?php
require_once('functions.php');

  if (isset($_GET['idSolicitadores'])){
	   delete($_GET['idSolicitadores']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>