<?php
require_once('../config.php');
require_once(DBAPI);
$itens = null; /**ira guardar um conjunto de registros de solicitadores**/
$item = null; /**ira guardar um unico solicitador para create e update**/


function index(){
	global $itens;
	$itens = find_all_t('itens');
}

function add(){
	 if (!empty($_POST['item'])) { 
	   $item = $_POST['item'];
	   //$customer['modified'] $today->format("Y-m-d H:i:s");
	   //$solicitacao['data'] = $today->format("Y-m-d");
		
		save('itens', $item);
		header('location: index.php');//para que serve essa linha?
	}
}

function edit(){
	//$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['idItens'])){
		$id = $_GET['idItens'];
		
		if(isset($_POST['item'])){
			$item = $_POST['item'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s");
			update_item('itens', $id, $item);
			header('location: index.php');
		}
		else{
			global $item;//para que serve o global?
			$item = find_item('itens',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	global $item;
	$item = find_item('itens',$id);
}

function delete($id=null){
	global $item;
	$item = remove_item('itens', $id);
	header('location: index.php');
}