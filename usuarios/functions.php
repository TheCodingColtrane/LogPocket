<?php
require_once('../config.php');
require_once(DBAPI);
$usuarios = null; /**ira guardar um conjunto de registros de solicitadores**/
$usuario = null; /**ira guardar um unico solicitador para create e update**/


function index(){
	global $usuarios;
	$usuarios = find_all_t('usuarios');
}

function add(){
	 if (!empty($_POST['usuario'])) { 
	   $usuario = $_POST['usuario'];
		save('usuarios', $usuario);
		header('location: index.php');//para que serve essa linha?
	}
}

function add2(){
	 if (!empty($_POST['usuario'])) { 
	   $usuario = $_POST['usuario'];
	if(isset($_POST['transportador'])){
				$usuario['tipo'] = 3;
				header('Location:../transportadores/add2.php');
		}
			
	if(isset($_POST['solicitador'])){
			$usuario['tipo'] = 2;
			header('Location:../solicitadores/add.php');
		}
	   
	   save('usuarios', $usuario);
		/*if(isset($usuario['tipo']))
		{ header('Location:../principal.php');}*/
	
			
		}

}

function edit(){
	//$now = date_create("now", new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['idUsuario'])){
		$id = $_GET['idUsuario'];
		if(isset($_POST['usuario'])){
			$usuario = $_POST['usuario'];
			//$customer['modified'] = $now->format("Y-m-d H:i:s");
			update_usuario('usuarios', $id, $usuario);
			header('location: index.php');
		}
		else{
			global $usuario;//para que serve o global?
			$usuario = find_usuario('usuarios',$id);
		}
	}
	/*else{
		header('location: index.php');
	}*/
}

function view($id=null){
	//if (!empty($_POST['solicitacao'])) {
	global $usuario;
	$usuario = find_usuario('usuarios',$id);
	//}
}

function delete($id=null){
	global $usuario;
	$usuario = remove_usuario('usuarios', $id);
	header('location: index.php');
}