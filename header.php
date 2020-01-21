<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: users/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: users/login.php");
  }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Green Eats - Get Your Foods</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
	
	<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
	  <script>$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});</script>

<div class="container">
  <header>
  <div class="primary_header">
      <div class="container"><img src="img/nsbmlogo.png" width="100" height="50" alt="NSBM"/></div>
	  <form>
		  <div id="headerLinks">        <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

    	 <button class="btn-danger"><a href="index.php?logout='1'" style="color: white;">Logout</a></button>
    <?php endif ?>
			  </div>
	  </form>
    </div>
	 

	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="menu.php">Mini Canteen</a>
					  <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="menu.php">Hostel Canteen</a>
					  <div class="dropdown-divider"></div>
				   <a class="dropdown-item" href="menu.php">Hela Bojung</a>
                       <div class="dropdown-divider"></div>	
					<a class="dropdown-item" href="menu.php">Natura</a>
					  <div class="dropdown-divider"></div>
				   <a class="dropdown-item" href="menu.php">Nungu</a>
                </div>
             </li>
			  <li class="nav-item">
                <a class="nav-link" href="order.php">Order Foods</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
             </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search </button>
          </form>
       </div>
    </nav>
