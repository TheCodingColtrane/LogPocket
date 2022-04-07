<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a dark background color with a little bit see-through */
.navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand {
    color: #d5d5d5 !important;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: red !important;
} 


.person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
}
.person:hover {
    border-color: #f1f1f1;
}

#img{
	max-width:100px;
	max-height: 100px;
	width: auto;
	height: auto;
}

#h1 {
		position:absolute;
		top: 150px;
		left: 100px;
		width: 1200px;
	}
	
#h2 {
		position:absolute;
		top: 500px;
		left: 100px;
	}
	
#h3 {
		position:absolute;
		top: 900px;
		left: 100px;
	}
	
	

<img src="../imgs/addDelivery.png" class="img-circle person" alt="Random Name">
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LogPocket</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="menuSolicitador.php">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
		   <li><a href="../logout.php">Sair</a></li>
		   <hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
            <li><a href="#">Meus dados</a></li>
            <li><a href="#">Minhas solicitações</a></li>
			<li><a href="#">Entregas</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Configurações</a></li><br>
			<li><a href="#">Torne-se um transportador!</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
 
<div class="row" id="h1">
  <div class="col-sm-3">
  <p class="text-center"><strong></strong></p><br>
    <a href="#demo" data-toggle="collapse">
     <center> <img src="../imgs/addDelivery.png"   id="img" alt="Random Name"></center>
    </a>
    <center><div id="demo" class="collapse">
      <a href="adm/transportadores.php">Transportadores</a><br>
      <a href="adm/solicitadores.php">Solicitadores</a><br>
	  <a href="menuAdm.php">Adiministradores</a>
    </div></center>
  </div>
 </div>
 
<footer class="container-fluid text-center" id="h3">
  <p></p>
</footer>

</body>
</html>
