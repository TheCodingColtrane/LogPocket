<?php
require_once('../config.php');
function conectar()
{
//inicializando a conexao com o mysql
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
mysqli_set_charset($con,"utf8");
return $con;
}
function desconectar($con)
{
mysqli_close($con);
}
function listarcargos()
{
$db = conectar();
//criando a query
$sql = mysqli_query($db,"SELECT * FROM entrega") or die (mysqli_error($db));
//caregando os registros na tela
$aux = mysqli_fetch_all($sql,MYSQLI_ASSOC);
desconectar($db);
return $aux;
}
function listarcargo($idEntrega = null)
{
if ($idEntrega)
{
$db = conectar();
$comandosql = "SELECT * FROM entrega WHERE idEntrega = ".$idEntrega.";";
//criando a query
$sql = mysqli_query($db,$comandosql) or die (mysqli_error($db));
//caregando os registros na tela
$aux = mysqli_fetch_assoc($sql);
desconectar($db);
return $aux;
}
}
function inserir()
{
if (isset($_POST['salvar']))
{
$preco = $_POST['preco'];
$dt_saida = $_POST['dt_saida'];
$dt_chegada = $_POST['dt_chegada'];
$hr_saida = $_POST['hr_saida'];
$hr_chegada = $_POST['hr_chegada'];
$solicitacao = $_POST['solicitacao_idSolicitacao'];
$transportador = $_POST['transportadores_idTransportadores'];
$veiculo = $_POST['veiculos_idVeiculo'];
$db = conectar();
$comandosql = "INSERT INTO entrega VALUES (null,'".$preco."','".$dt_saida."','".$dt_chegada."','".$hr_saida."','".$hr_chegada."','".$solicitacao."','".$transportador."','".$veiculo."');";
//criando a query
$sql = mysqli_query($db,$comandosql) or die (mysqli_error($db));
desconectar($db);
header("location:index.php");
}
}
function alterar()
{
if (isset($_GET['id']))
{
$id = $_GET['id'];

if (isset($_POST['salvar']))
{
$idEntrega = $id;
$preco = $_POST['preco'];
$dt_saida = $_POST['dt_saida'];
$dt_chegada = $_POST['dt_chegada'];
$hr_saida = $_POST['hr_saida'];
$hr_chegada = $_POST['hr_chegada'];
$solicitacao = $_POST['solicitacao_idSolicitacao'];
$transportador = $_POST['transportadores_idTransportadores'];
$veiculo = $_POST['veiculos_idVeiculo'];
$db = conectar();
$comandosql = "UPDATE entrega SET preco = '".$preco."',dt_saida = '".$dt_saida."', dt_chegada = '".$dt_chegada."',hr_saida = '".$hr_saida."',hr_chegada = '".$hr_chegada."',solicitacao_idSolicitacao = '".$solicitacao."',transportadores_idTransportadores = '".$transportador."',veiculos_idVeiculo = '".$veiculo."' WHERE idEntrega = ".$idEntrega.";";
//criando a query
$sql = mysqli_query($db,$comandosql) or die (mysqli_error($db));
desconectar($db);
header("location:index.php");
}
}
else
{
header('location: index.php');
}
}
function excluir()
{
if (isset($_GET['id']))
{
$id = $_GET['id'];
$idEntrega = $id;
$db = conectar();
$comandosql = "DELETE FROM entrega WHERE idEntrega = ".$idEntrega.";";
//criando a query
$sql = mysqli_query($db,$comandosql) or die (mysqli_error($db));
desconectar($db);
header("location:index.php");
}
else
{
header('location: index.php');
}
}
?>