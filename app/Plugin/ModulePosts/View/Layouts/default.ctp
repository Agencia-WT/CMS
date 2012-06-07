<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Module Posts</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="<?php echo Router::url('/', true) ?>module_posts/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo Router::url('/', true) ?>module_posts/css/style.css">

</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container" role="main" id="main">

	<h2>Module Posts</h2>
	<hr>
  <?php echo $this->Session->flash('auth');?>
  
	<?php echo $this->fetch('content'); ?>
</div> <!-- /container -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Router::url('/',true) ?>module_posts/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo Router::url('/',true) ?>module_posts/js/scripts.js"></script>

</body>
</html>
