<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<?php require_once 'library/main.php';?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>LFG BoosT</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src='js/fontawesome.js'></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bsnav.min.css">
	<link rel="stylesheet" type="text/css" href="font/barlow.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet/less" type="text/css" href="css/main.less">
    <link rel="shortcut icon" href="img/logo.png">
  </head>
<body>
	<div class="flex-wrapper">
	<header id="header">
		<div class="pc">
			<?php 
				require_once 'tmp/top-bar.php';
			?>
		</div>
        <div class="navbar navbar-expand-lg bsnav">            
			<div class="container main-menu-mb">  
				<div class="mobile-shop">
					<a href="/?page=checkout">
						<span class="icon icon-shop">
							<i class='fas'>&#xf07a;</i>
							<p class="num-shop">2</p>
						</span>
					</a>
				</div>
				<a class="navbar-brand" href="/?page=index"><img src="img/logo.svg"></a>
				<button class="navbar-toggler toggler-spring" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">  
					<div class="mobile">
						<?php 
							require_once 'tmp/top-bar_mob.php';
						?>
					</div>				
					<ul class="navbar-nav nav-margin menu_mob">
						<li class="nav-item nav-item-fill">
							<a class="nav-link" href="/?page=contact">Contact us</a>        
						</li>  
						<li class="nav-item">
							<a class="nav-link " href="/?page=works">How it works</a> 				
						</li>							
						<li class="nav-item"> 
							<a class="nav-link " href="/?page=shop">Shop</a>       
						</li>   
						<li class="nav-item"> 
							<a class="nav-link " href="/?page=checkout">Checkout</a>         
						</li>   
					</ul> 
					<div class="right nav-margin nav-link">			
						<form class="form-inline  mt-md-0">
							<div id="action-user">
								<a href="/?page=user"><span class="icon icon-user"><i class='fas'>&#xf2bd;</i> User</span></a>
								<a  class="main-menu-pc" href="/?page=checkout">
									<span class="icon icon-shop">
										<i class='fas'>&#xf07a;</i>
										<p class="num-shop">2</p>
									</span>
								</a>
								<div class="dropdown-log">
									<div class="items">
										<div class="item">
											<a class="nav-link " href="/?page=login">Login</a>   
										</div>
										<div class="item">
											<a class="nav-link " href="/?page=register">Registration</a> 
										</div>
									</div>
								</div>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
        <!--/nav-->

    </header>
	    