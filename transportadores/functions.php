<?php
require_once('../config.php');
require_once(DBAPI);
$transportadores = null; /**ira guardar um conjunto de registros de solicitadores**/
$transportador = null; /**ira guardar um unico solicitador para create e update**/


function index(){
	global $transportadores;
	$transportadores = find_all_t('transportadores');
}

function add(){
	 if (!empty($_POST['transportador'])) {
		 
		//$transportador['dt_nascimento']->format('Y-m-d');
	    $transportador = $_POST['transportador'];
		save('transportadores', $transportador);
		header('location: index.php');//para que serve essa linha?
		
	}
}

function add2(){
	$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	
	 if (!empty($_POST['transportador'])) {
		 
	    $transportador = $_POST['transportador'];
		
		$transportador['modificado'] = $now->format("Y-m-d H:i:s");
		$transportador['criado'] = $now->format("Y-m-d H:i:s");
		$transportador['classificacao_idClassificacao'] = 1; 
		
		save('transportadores', $transportador);
		
		header('Location:../veiculos/add2.php');
	}
}

//$data = str_replace("/", "-", $$transportador['dt_nascimento']);
	   //$dataP = explode('/', $transportador['dt_nascimento']);
	   //$transportador['dt_nascimento'] = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
	   //$today = date_create('now', new DateTimeZone('America/Sao_Paulo')); 
	   //
	   //$transportador['dt_nascimento'] = format("Y-m-d");
	   //if( DateTime::createFromFormat( 'Y-m-d', $transportador['dt_nascimento']->format('Y-m-d') == $data->format('Y-m-d'){

function edit(){
	//
	if (isset($_GET['idTransportadores'])){
		$id = $_GET['idTransportadores'];
		
	if(isset($_POST['transportador'])){
			$transportador = $_POST['transportador'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s");
			update_transportador('transportadores', $id, $transportador);
			header('location: index.php');
		}
		else{
			global $transportador;//para que serve o global?
			$transportador = find_transportador('transportadores',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	//if (!empty($_POST['solicitacao'])) {
	global $transportador;
	$transportador = find_transportador('transportadores',$id);
	//}
}

function delete($id=null){
	global $transportador;
	$transportador = remove_transportador('transportadores', $id);
	header('location: index.php');
}