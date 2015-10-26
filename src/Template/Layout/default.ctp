<!DOCTYPE html>
<html lang="en">
<head>
<title><?= h($this->fetch('title')) ?></title>
<link rel="shortcut icon" href="http://static1.saholic.com/images/favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<!-- Latest compiled and minified CSS--> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<?php
$this->Html->css('bootstrap', ['block'=>true]);
$this->Html->css('style', ['block'=>true]);
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<!-- jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="header" class="container">
		<div class="navbar navbar-default navbar-static-top bs-docs-nav">
      		<div class="container-fluid">
        		<div class="navbar-header">
          			<a href="/" class="navbar-brand">Smartlumina</a>
      				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        			</button>
        		</div>
        		<div class="navbar-collapse collapse navbar-menubuilder" id="navbar-main">
          			<ul class="nav navbar-nav">
            		<!--<li class="dropdown">
              			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Brands <span class="caret"></span></a>
              			<ul class="dropdown-menu" aria-labelledby="themes">
              		</ul>
            		</li>-->
			            <li><a href="/">Home</a></li>
			            <li><a href="/about">About Us</a></li>
			            <li><a href="/product">Products</a></li>
			            <li><a href="/product">Services</a></li>
			            <li><a href="/contact-us" target="_blank">Contact Us</a></li>
          			</ul>
			        <a href="tel:9990381569" class="navbar-btn btn-danger btn pull-right">
				    <span class="glyphicon glyphicon-earphone"></span>&nbsp; Customer Care</a>
    	    	</div>
      		</div>
    	</div>
	</div>


	<!-- Here's where I want my views to be displayed -->
	<div id="content" class="container">
		<?= $this->fetch('content') ?>
	</div>
	
	<!-- Add a footer to each displayed page -->
	<div id="footer" class="container">
		<hr>
		<div class="row">
	        	<div class="col-xs-3 pull-right">
	                	<p>&copy; Copyright 2015 Smart Lumina</p>
	        	</div>
	    	</div>
	</div>

</body>
</html>