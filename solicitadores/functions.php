<?php
require_once('../config.php');
require_once(DBAPI);
$solicitadores = null; /**ira guardar um conjunto de registros de solicitadores**/
$solicitador = null; /**ira guardar um unico solicitador para create e update**/
$user = null;

function index(){
	global $solicitadores;
	$solicitadores = find_all('solicitadores');
}

function add(){
	 if (!empty($_POST['solicitador'])) { 
	   //$today = date_create('now', new DateTimeZone('America/Sao_Paulo')); 
	   $solicitador = $_POST['solicitador'];
	   //$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");

		save('solicitadores', $solicitador);
		header('location: index.php');//para que serve essa linha?
	}
}

function add2(){
	/*$email = null;
	$senha = null;*/
	//$cadastro = array();
	global $solicitador;
	
	if (!empty($_POST['solicitador'])){
	$solicitador = $_POST['solicitador'];
	save_user($solicitador['email'],$solicitador['senha'], 1);}
}

function edit(){
	//$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['idSolicitadores'])){
		$id = $_GET['idSolicitadores'];
		if(isset($_POST['solicitador'])){
			$solicitador = $_POST['solicitador'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s"); 
			update('solicitadores', $id, $solicitador);
			header('location: index.php');
		}
		else{
			global $solicitador;//para que serve o global?
			$solicitador = find('solicitadores',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	global $solicitador;
	$solicitador = find('solicitadores',$id);
}

function delete($id=null){
	global $solicitador;
	$solicitador = remove('solicitadores', $id);
	header('location: index.php');
}