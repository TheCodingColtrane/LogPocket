<?php
require_once('functions.php');

  if (isset($_GET['idAvaliacao'])){
	   delete($_GET['idAvaliacao']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>