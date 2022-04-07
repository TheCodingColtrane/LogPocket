<?php
require_once('functions.php');

  if (isset($_GET['idVeiculo'])){
	   delete($_GET['idVeiculo']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>