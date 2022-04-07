<?php
require_once('functions.php');

  if (isset($_GET['idUsuario'])){
	   delete($_GET['idUsuario']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>