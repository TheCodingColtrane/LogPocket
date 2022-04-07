<?php
require_once('functions.php');

  if (isset($_GET['idItens'])){
	   delete($_GET['idItens']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>