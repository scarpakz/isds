<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="<?php echo @$description; ?>">
	<meta name="keywords" content="<?php echo @$keywords; ?>">
	<meta name="author" content="<?php echo @$author; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo @$title; ?></title>

	<link rel="icon" href="" media="screen,projection" />

	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
	<?php
			if(@$styles) {
			foreach (@$styles as $css) : ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url($css . '.css'); ?>" media="screen,projection" />
	<?php endforeach; }?>
</head>

<body>
	<nav class="navbar navbar-expand-lg site-header sticky-top py-1">
		<div class="container d-flex flex-column flex-md-row justify-content-between">
			<div class="py-1 navbar-header">
				<a href="#" data-target="#navbarCollapse" data-toggle="collapse" class="collapsed" aria-expanded="false" aria-controls="navbarCollapse">
					<svg width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
						stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false">
						<title>ISDS</title>
						<circle cx="12" cy="12" r="10" />
						<path
							d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
					</svg>
				</a>
				<div id="navbarCollapse" class="collapse navbar-collapse">
					<ul class="navbar-nav">
						<li class="py-2 d-md-none d-sm-inline-block"><a href="#">Home</a></li>
						<li class="py-2 d-md-none d-sm-inline-block"><a href="#">About Us</a></li>
						<li class="py-2 d-md-none d-sm-inline-block"><a href="#">Portfolio</a></li>
						<li class="py-2 d-md-none d-sm-inline-block"><a href="#">News and Events</a></li>
						<li class="py-2 d-md-none d-sm-inline-block"><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<a class="py-2 d-none d-md-inline-block" href="#">Home</a>
			<a class="py-2 d-none d-md-inline-block" href="#">About Us</a>
			<a class="py-2 d-none d-md-inline-block" href="#">Portfolio</a>
			<a class="py-2 d-none d-md-inline-block" href="#">News and Events</a>
			<a class="py-2 d-none d-md-inline-block" href="#">Contact Us</a>
		</div>
	</nav>

	<?php 
		echo $yield; 
	?>

	<footer class="container col-12 py-2">
		<div class="row">
			<div class="col-3 col-md">
				<h5>Features</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Cool stuff</a></li>
					<li><a class="text-muted" href="#">Random feature</a></li>
					<li><a class="text-muted" href="#">Team feature</a></li>
					<li><a class="text-muted" href="#">Stuff for developers</a></li>
					<li><a class="text-muted" href="#">Another one</a></li>
					<li><a class="text-muted" href="#">Last time</a></li>
				</ul>
			</div>
			<div class="col-3 col-md">
				<h5>Resources</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Resource</a></li>
					<li><a class="text-muted" href="#">Resource name</a></li>
					<li><a class="text-muted" href="#">Another resource</a></li>
					<li><a class="text-muted" href="#">Final resource</a></li>
				</ul>
			</div>
			<div class="col-3 col-md">
				<h5>Resources</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Business</a></li>
					<li><a class="text-muted" href="#">Education</a></li>
					<li><a class="text-muted" href="#">Government</a></li>
					<li><a class="text-muted" href="#">Gaming</a></li>
				</ul>
			</div>
			<div class="col-3 col-md">
				<h5>About</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Team</a></li>
					<li><a class="text-muted" href="#">Locations</a></li>
					<li><a class="text-muted" href="#">Privacy</a></li>
					<li><a class="text-muted" href="#">Terms</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md text-center">
				<svg class="text-center" width="24" height="24" fill="none" stroke="currentColor"
					stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img"
					viewBox="0 0 24 24" focusable="false">
					<title>ISDS</title>
					<circle cx="12" cy="12" r="10" />
					<path
					d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
				</svg>
				<small class="text-muted">
					&copy; 2017-2019
				</small>
			</div>
		</div>
	</footer>
</body>

<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>

<?php 
		if(@$scripts) {
		foreach (@$scripts as $js) : ?>
<script type="text/javascript" src="<?php echo base_url($js . '.js'); ?>"></script>
<?php endforeach; }?>

</html>
