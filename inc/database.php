<?php
/** Avisar erros graves **/
mysqli_report(MYSQLI_REPORT_STRICT);
 
function open_database() { 
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	} catch (Exception $e) {
			echo $e->getMessage(); 
			return null;
	}
}

function close_database($conn) { 
	try{
		mysqli_close($conn);
	} catch (Exception $e) {
			echo $e->getMessage(); 
	}
}

function find_all_t($table){
	$database = open_database();
	$found = '';
	try{
				$sql = "SELECT * FROM ".$table;
				//$result = $database->query($sql);
				$result=mysqli_query($database,$sql);
				
				if (isset($result->num_rows) > 0){
					$found = mysqli_fetch_all($result, MYSQLI_ASSOC);
				//if ($result-> num_rows > 0){	
				//$found = $result->fetch_all(MYSQLI_ASSOC);
				}
			}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function find_all($table){
	return find($table);
}

function save($table = null, $data = null) { //$data se refere a dados? 
$database = open_database();
$columns = null;
$values = null;

  foreach ($data as $key => $value) { //para que server o $key?
   $columns .= trim($key, "'") . ","; //trim??
   $values .= "'$value',"; 
 }
 
 $columns = rtrim($columns, ',');    
 $values = rtrim($values, ',');
 
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);"; 
  try{
	  $database->query($sql); //query = pergunta, duvida mas como ele funciona na programação?
	  $_SESSION['message'] = 'Registro cadastrado com sucesso.'; 
	  $_SESSION['type'] = 'success'; 
  }
  catch(Exception $e){
	   $_SESSION['message'] = 'Nao foi possivel realizar a operacao.'; 
	   $_SESSION['type'] = 'danger'; 
  }
  close_database($database);
}

function clear_message(){
	unset($_SESSION['message']);//unset?
	unset($_SESSION['type']);
}












//adms
function find_adms(){
	$database = open_database();
	$found = '';
	
	try{
			$sql = "SELECT * FROM usuarios WHERE tipo = 1";
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				while($linha = mysqli_fetch_assoc($result)){
					$found[] = $linha;
			}
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
				
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}








//solicitadores
function find($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idSolicitadores = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}
		
		else {
				$sql = "SELECT * FROM ".$table;
				//$result = $database->query($sql);
				$result=mysqli_query($database,$sql);
				
				if (isset($result->num_rows) > 0){
					$found = mysqli_fetch_all($result, MYSQLI_ASSOC);
				//if ($result-> num_rows > 0){	
				//$found = $result->fetch_all(MYSQLI_ASSOC);
				}
			}
		}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}
	
function update($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idSolicitadores = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idSolicitadores = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}




//solicitacoes
function find_solicitacao($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idSolicitacao = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function update_solicitacao($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idSolicitacao = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove_solicitacao($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idSolicitacao = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}




//transportadores
function find_transportador($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idTransportadores = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function update_transportador($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idTransportadores = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove_transportador($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idTransportadores = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}






//veiculos
function find_veiculo($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idVeiculo = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function update_veiculo($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idVeiculo = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove_veiculo($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idVeiculo = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}





//avaliacoes
function find_avaliacao($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idAvaliacao = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function update_avaliacao($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idAvaliacao = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove_avaliacao($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idAvaliacao = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}












//classificacoes
function find_classificacao($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idClassificacao = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function update_classificacao($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idClassificacao = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove_classificacao($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idClassificacao = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}












//itens
function find_item($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idItens = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function remove_item($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idItens = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}

function update_item($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idItens = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}






//usuarios
function find_usuario($table = null, $id = null){
	$database = open_database();
	$found = '';
	
	try{
		if($id){
			$sql = "SELECT * FROM ".$table." WHERE idUsuario = ".$id;
			//$result = $database->query($sql);
			$result=mysqli_query($database,$sql);
			
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				//$found = $result;
			//if ($result->num_rows > 0){
				//$found = mysqli_fetch_assoc($result);
			}	
		}}
		catch (Exception $e){
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	}
	
	close_database($database);
	return $found;
}

function update_usuario($table = null, $id = null, $data = null){
	$database = open_database();
	$items = null;
	
	foreach ($data as $key => $value){ //como funciona o foreach?
		$items.= trim($key, "'") . "='$value',"; // para que serve o "." antes do "=" ?
	}
	
	$items = rtrim($items,','); //rtrim??
	$sql = "UPDATE ".$table;
	$sql .= " SET $items";
	$sql .= " WHERE idUsuario = " . $id . ";"; 
	
	try{
		$database->query($sql); 
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	}
	catch(Exception $e){
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	}
	close_database($database);
}

function remove_usuario($table=null, $id=null){	//pq os parametros tem que estar como null?
$database = open_database();

	try{
		if($id){
			$sql = "DELETE FROM ".$table." WHERE idUsuario = ".$id;
			$result = $database->query($sql); 
		
		if ($result = $database->query($sql)) {
			$_SESSION['message'] = "Registro Removido com Sucesso."; 
			$_SESSION['type'] = 'success'; 
		}
	}
	}
	catch(Exception $e){
		  $_SESSION['message'] = $e->GetMessage();      
		  $_SESSION['type'] = 'danger'; 
	}
	close_database($database);
}








function find_user($table=null,$email=null, $senha=null)
{
    $database = open_database();
	$found = '';
    /*$email = $user["'email'"];
    $senha = md5($user["'senha'"]);
	$_SESSION['idUsuario'] = $resultados['idUsuario'];*/
    $sql = "SELECT * FROM ".$table." WHERE email = ".$email." AND senha = ".$senha;
	$result=mysqli_query($database,$sql);
	
    try {
        if($database->query($sql)) {
			if (isset($result->num_rows) > 0){
				$found = mysqli_fetch_assoc($result);
				$_SESSION['message'] = 'Login efetuado com sucesso.';
				$_SESSION['type'] = 'success';
			}
			else{
            $_SESSION['message'] = 'Você precisa se cadastar';
            $_SESSION['type'] = 'danger';
			}
        }
        
    } catch (Exception $e) {
        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
	return $found;
}

function save_user($email=null, $senha=null, $tipo=null){
$database = open_database();

try{
$sql = "INSERT INTO usuario VALUES (null, '".$email."','".$senha."','".$tipo."');";	
if(mysqli_query($database,$sql))
{	$_SESSION['message'] = 'Usuario cadastrado.';
            $_SESSION['type'] = 'success';
        }
        else{
            $_SESSION['message'];
            $_SESSION['type'] = 'danger';
        }
} catch (Exception $e){
	$_SESSION['message'] = 'Nao foi possivel cadastar o usuario.';
        $_SESSION['type'] = 'danger';}
	
}