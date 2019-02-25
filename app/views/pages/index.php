<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo SITENAME; ?></title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT; ?>public/css/landing.css">
</head>
<?php require APPROOT . '\views\inc\navbar.php'; ?>
<body>
	<div class="content">
		<div class="mid-form col-lg-12">
			<h1><?php echo SITENAME; ?></h1>
			<h3>A better logistics solution for the modern world</h3>
			<a href="<?php echo URLROOT; ?>contacts/quote">Get A Quote <i class="far fa-arrow-alt-circle-right"></i></a>
			<?php flash('contact_success') ?>
		</div>
	</div>

	<ul class="slideshow">
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	  <li></li>
	</ul>
	
	<script type="text/javascript" src="<?php echo URLROOT; ?>public/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?php echo URLROOT; ?>public/js/bootstrap.js"></script>	 	
</body>
</html>