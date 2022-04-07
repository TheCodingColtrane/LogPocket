<?php
require_once('../config.php');
require_once(DBAPI);
$solicitacoes = null; /**ira guardar um conjunto de registros de solicitadores**/
$solicitacao = null; /**ira guardar um unico solicitador para create e update**/


function index(){
	global $solicitacoes;
	$solicitacoes = find_all_t('solicitacao');
}

function add(){
	 if (!empty($_POST['solicitacao'])) { 
	   $today = date_create('now', new DateTimeZone('America/Sao_Paulo')); 
	   $solicitacao = $_POST['solicitacao'];
	   //$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
		$solicitacao['data'] = $today->format("Y-m-d");
		
		save('solicitacao', $solicitacao);
		header('location: index.php');//para que serve essa linha?
	}
}

function edit(){
	//$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['idSolicitacao'])){
		$id = $_GET['idSolicitacao'];
		if(isset($_POST['solicitacao'])){
			$solicitacao = $_POST['solicitacao'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s");
			update_solicitacao('solicitacao', $id, $solicitacao);
			header('location: index.php');
		}
		else{
			global $solicitacao;//para que serve o global?
			$solicitacao = find_solicitacao('solicitacao',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	//if (!empty($_POST['solicitacao'])) {
	global $solicitacao;
	$solicitacao = find_solicitacao('solicitacao',$id);
	//}
}

function delete($id=null){
	global $solicitacao;
	$solicitacao = remove_solicitacao('solicitacao', $id);
	header('location: index.php');
}