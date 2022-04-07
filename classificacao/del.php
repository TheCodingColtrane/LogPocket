<?php
require_once('functions.php');

  if (isset($_GET['idClassificacao'])){
	   delete($_GET['idClassificacao']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>