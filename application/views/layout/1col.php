<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>JayTimer</title>
	<meta name="viewport" content="width=device-width" />
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.2/underscore-min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/0.9.2/backbone-min.js"></script>
	<?php echo HTML::style('css/style.css') ?>
	<?php echo HTML::script('js/site.js') ?>
	<?php echo HTML::script('js/jquery/cookie.1.3.js') ?>
	<?php echo HTML::script('js/dateformat.js') ?>
</head>
<body>
	<?php echo render('layout.widgets.nav'); ?>
	<section class="main content container-fluid">
		<div class="row-fluid">
			<?php echo $content ?>
		</div>
	</section>
	<?php echo render('layout.widgets.footer'); ?>
</body>