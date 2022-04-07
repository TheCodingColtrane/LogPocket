<?php
    
		if(isset($_SESSION['idUsuario']) && isset($_SESSION['tipo']))
	{
		if($_SESSION['tipo'] != "3")
		{
			header("location: logout.php");			
		}
	}
	else{
		header("location: logout.php");
	}
    
?>