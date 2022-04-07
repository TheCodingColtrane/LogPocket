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

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}











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
	max-width:150px;
	max-height: 150px;
	width: auto;
	height: auto;
}


#h0 {
		position:absolute;
		top: 85px;
		left: 100px;
		width: 1200px;
	}

#class {
		position:absolute;
		top: 180px;
		left: 100px;
		width: 1200px;
	}

#h {
		position:absolute;
		top: 100px;
		left: 200px;
		width: 1200px;
	}


#h1 {
		position:absolute;
		top: 800px;
		left: 400px;
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
	
	

<img src="../imgs/entregas.png" class="img-circle person" alt="Random Name">
<img src="../imgs/like.png" class="img-circle person" alt="Random Name">
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
        <li><a href="menuTransportador.php">HOME</a></li>
        <li><a href="#band">FINANCEIRO</a></li>
        <li><a href="#contact">CHAT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="../logout.php">Sair</a></li>
			<hr style="height:1px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/><br>
			<li><a href="#">Meus dados</a></li>
			<li><a href="#">Meus veículos</a></li><br>
            <li><a href="#">Fale com a gente</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="h0">
<h3>Status<h3></div>

<div id="h">

 <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label><br><br>
</div>

<div id="class">
<img src="../imgs/5estrelas.png" id="img" alt="Random Name">
</div>


 <div class="row" id="h1"> 
 
  <div class="col-sm-4">
    <p class="text-center"><strong>Entregas</strong></p><br>
    <a href="#demo2" data-toggle="collapse">
      <center><img src="../imgs/entregas.png" class="img-circle person" id="img" alt="Random Name"></center>
    </a>
    <center><div id="demo2" class="collapse">
      <a href="adm/servicos.php">Realizadas</a><br>
	  <a href="adm/servicos.php">Em andamento</a><br>
    </div></center>
  </div>
  <div class="col-sm-3">
    <p class="text-center"><strong>Avaliações</strong></p><br>
    <a href="#demo3" data-toggle="collapse">
      <center><img src="../imgs/like.png" class="img-circle person" id="img" alt="Random Name"></center>
    </a>
    <center><div id="demo3" class="collapse">
      <a href="menuAdm.php">Todas</a><br>
	  <a href="menuAdm.php">Buscar</a><br>
	  <a href="menuAdm.php">Minha Classificação</a>
    </div></center>
  </div>
</div>
 


</body>
</html>
