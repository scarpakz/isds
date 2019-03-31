<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="author" content="<?php echo $author; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo @$title; ?></title>

	<link rel="icon" href="" media="screen,projection" />

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
	<?php
			if(@$styles) {
			foreach ($styles as $css) : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($css . '.css'); ?>" media="screen,projection" />
	<?php endforeach; }?>
</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">ISDs</a>
			</div>
			<!-- Collection of nav links and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolios
							<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Software App</a></li>
							<li><a href="#">Web Apps</a></li>
							<!-- <li><a href="#">Websites</a></li> -->
							<li><a href="#">Internet of Things Device</a></li>
						</ul>
					</li>
					<li><a href="#">News and Events</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<?php 
		echo $yield; 
	?>
</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

<?php 
		if(@$scripts) {
		foreach ($scripts as $js) : ?>
<script type="text/javascript" src="<?php echo base_url($js . '.js'); ?>"></script>
<?php endforeach; }?>

</html>
