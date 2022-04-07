<?php
require_once('../config.php');
require_once(DBAPI);
$avaliacoes = null; /**ira guardar um conjunto de registros de solicitadores**/
$avaliacao = null; /**ira guardar um unico solicitador para create e update**/
$qtd_avaliacoes = 0;

function index(){
	global $avaliacoes;
	$avaliacoes = find_all_t('avaliacao');
}

function add(){

	 if (!empty($_POST['avaliacao'])) { 
	   $today = date_create('now', new DateTimeZone('America/Sao_Paulo')); 
	   $avaliacao = $_POST['avaliacao'];
	   //$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
		$avaliacao['data'] = $today->format("Y-m-d");
		
		save('avaliacao', $avaliacao);
		header('location: index.php');//para que serve essa linha?
	}

}

function edit(){
	//$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['idAvaliacao'])){
		$id = $_GET['idAvaliacao'];
		
		if(isset($_POST['avaliacao'])){
			$avaliacao = $_POST['avaliacao'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s");
			update_avaliacao('avaliacao', $id, $avaliacao);
			header('location: index.php');
		}
		else{
			global $avaliacao;//para que serve o global?
			$avaliacao = find_avaliacao('avaliacao',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	//if (!empty($_POST['avaliacao'])) {
	global $avaliacao;
	$avaliacao = find_avaliacao('avaliacao',$id);
	//}
}

function delete($id=null){
	global $avaliacao;
	$avaliacao = remove_avaliacao('avaliacao', $id);
	header('location: index.php');
}