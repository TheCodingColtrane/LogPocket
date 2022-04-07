<?php
require_once('functions.php');

  if (isset($_GET['idTransportadores'])){
	   delete($_GET['idTransportadores']); 
}
  else {
	  die("ERRO: ID não definido."); //die??
  }
?>