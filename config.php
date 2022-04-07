<?php
header("Content-Type: text/html; charset=utf8"); 

/** Inicialização da sessão*/ 
session_start(); 

/** O nome do banco de dados*/  
define('DB_NAME', 'logpocket'); 

/** Usuário do banco de dados MySQL */  
define('DB_USER', 'root'); 

/** Senha do banco de dados MySQL */  
define('DB_PASSWORD', ''); 

/** nome do host do MySQL */  
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/  
if ( !defined('ABSPATH') )   
define('ABSPATH', dirname(__FILE__) . '/'); 
/** ABSPATH define o caminho absoluto da pasta raiz no sistema de arquivos **/

/** caminho do arquivo de banco de dados 
if ( !defined('BASEURL') )   
define('BASEURL', '/crud/'); **/

/** caminho do arquivo de banco de dados **/  
if ( !defined('DBAPI') )   
define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
if ( !defined('BASEURL') )    
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');  
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php'); 


 