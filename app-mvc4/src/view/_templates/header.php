<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=APP_TITTLE?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="<?php echo URL; ?>css/custom.css" rel="stylesheet">                
</head>
<body>
    <!-- logo, check the CSS file for more info how the logo "image" is shown -->
    <div align="center"><h1><?=APP_TITTLE?></h1></div>
	<img class="center-img" src="<?php echo URL; ?>/public/images/mvc.png">
<div class="container">
	<nav class="navbar-expand bg-dark navbar-dark">
		<ul class="navbar-nav justify-content-center">
		  <li class="nav-item">
		    <a class="nav-link" href="<?php echo URL; ?>">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="<?php echo URL; ?>customers">Customers</a>
		  </li>
		</ul>
	</nav>
</div>
