
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
	max-width:200px;
	max-height: 200px;
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
	
	

<img src="imgs/usuarios.png" class="img-circle person" alt="Random Name">
<img src="bandmember.jpg" class="img-circle person" alt="Random Name">
<img src="bandmember.jpg" class="img-circle person" alt="Random Name">
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
      <a class="navbar-brand" href="#">LogPocket - Admin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="menuAdm.php">HOME</a></li>
        <li><a href="adm/financeiro.php">FINANCEIRO</a></li>
		<li><a href="adm/relatorio.php">RELATÓRIOS</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Sair</a></li>
			<hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
            <li><a href="classificacao/index.php">Classificações</a></li>
            <li><a href="adm/index.php">Adiministradores</a></li><br>
			<li><a href="adm/view.php">Meus dados</a></li>
			<li><a href="#">Minhas solicitações</a></li>
			<li><a href="#">Entregas</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

 <div class="row" id="h1">
  <div class="col-sm-3">
  <p class="text-center"><strong>Usuários</strong></p><br>
    <a href="#demo" data-toggle="collapse">
     <center> <img src="imgs/usuarios.png"  class="img-circle person" id="img" alt="Random Name"></center>
    </a>
    <center><div id="demo" class="collapse">
      <a href="adm/transportadores.php">Transportadores</a><br>
      <a href="adm/solicitadores.php">Solicitadores</a><br>
    </div></center>
  </div>
  <div class="col-sm-6">
    <p class="text-center"><strong>Entregas</strong></p><br>
    <a href="#demo2" data-toggle="collapse">
      <center><img src="imgs/entregas.png" class="img-circle person" id="img" alt="Random Name"></center>
    </a>
    <center><div id="demo2" class="collapse">
      <a href="adm/servicos.php">Serviços</a><br>
    </div></center>
  </div>
  <div class="col-sm-3">
    <p class="text-center"><strong>Avaliações</strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <center><img src="imgs/like.png" class="img-circle person" id="img" alt="Random Name"></center>
    </a>
    <center><div id="demo3" class="collapse">
      <a href="menuAdm.php">Transportadores</a>
    </div></center>
  </div>
</div>
 
  
<div class="container text-center" id="h2">    
  <h3></h3><br>
  <div class="row">
    <div class="col-sm-5">
	<h3>CRESCIMENTO DO PUBLICO</h3><br>
      <?php include (adm/relatorio.php)?>
	  </div>
  </div>
</div><br>


<footer class="container-fluid text-center" id="h3">
  <p></p>
</footer>

</body>
</html>
