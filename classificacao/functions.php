<?php
require_once('../config.php');
require_once(DBAPI);
$classificacoes = null; /**ira guardar um conjunto de registros de solicitadores**/
$classificacao = null; /**ira guardar um unico solicitador para create e update**/


function index(){
	global $classificacoes;
	$classificacoes = find_all_t('classificacao');
}

function add(){

	 if (!empty($_POST['classificacao'])) { 
	   $classificacao = $_POST['classificacao'];		
		save('classificacao', $classificacao);
		header('location: index.php');//para que serve essa linha?
	}
}

function edit(){
	//$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['idClassificacao'])){
		$id = $_GET['idClassificacao'];
		
		if(isset($_POST['classificacao'])){
			$classificacao = $_POST['classificacao'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s");
			update_classificacao('classificacao', $id, $classificacao);
			header('location: index.php');
		}
		else{
			global $classificacao;//para que serve o global?
			$classificacao = find_classificacao('classificacao',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	global $classificacao;
	$classificacao = find_classificacao('classificacao',$id);
}

function delete($id=null){
	global $classificacao;
	$classificacao = remove_classificacao('classificacao', $id);
	header('location: index.php');
}