<?php
require_once('../config.php');
require_once(DBAPI);
$veiculos = null; /**ira guardar um conjunto de registros de solicitadores**/
$veiculo = null; /**ira guardar um unico solicitador para create e update**/


function index(){
	global $veiculos;
	$veiculos = find_all_t('veiculos');
}

function add(){
	 if (!empty($_POST['veiculo'])) { 
	   //$today = date_create('now', new DateTimeZone('America/Sao_Paulo')); 
	   $veiculo = $_POST['veiculo'];
	   //$customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");
		
		save('veiculos', $veiculo);
		header('location: index.php');//para que serve essa linha?
	}
}

function add2(){
	$now = date_create("now", new DateTimeZone('America/Sao_Paulo')); 

	 if (!empty($_POST['veiculo'])) { 
	   
	   $veiculo = $_POST['veiculo'];
	   
	   $veiculo['modificado'] = $veiculo['criado'] = $now->format("Y-m-d H:i:s");
		
		save('veiculos', $veiculo);
		header('location: ../transportadores/termos_transportador.php');//para que serve essa linha?
	}
}

function edit(){
	if (isset($_GET['idVeiculo'])){
		$id = $_GET['idVeiculo'];
		
		if(isset($_POST['veiculo'])){
			$veiculo = $_POST['veiculo'];
			update_veiculo('veiculos', $id, $veiculo);
			header('location: index.php');
		}
		else{
			global $veiculo;//para que serve o global?
			$veiculo = find_veiculo('veiculos',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	global $veiculo;
	$veiculo = find_veiculo('veiculos',$id);
}

function delete($id=null){
	global $veiculo;
	$veiculo = remove_veiculo('veiculos', $id);
	header('location: index.php');
}