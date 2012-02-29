<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 modern-ie" lang="fr"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 modern-ie" lang="fr"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if !(IE)]><!-->
<html class="no-js" lang="fr"> <!--<![endif]-->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		
		<title>BeAPI Base theme</title>
		
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		
		<link rel="stylesheet" href="css/style.php" />
		
		<!-- jQuery -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
		
		<!-- jQuery UI -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
		<link rel='stylesheet' id='jquery-style-css' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/smoothness/jquery-ui.css?ver=3.3.1' type='text/css' media='all' />
		
		<!-- Superfish -->
		<script type="text/javascript" src="js/ressources/hoverIntent.js"></script>
		<script type="text/javascript" src="js/ressources/superfish.js"></script>
		
		<script type="text/javascript" src="js/scripts.js"></script>
		
		<script type="text/javascript">
			//<![CDATA[
			(function(){
				var c = document.documentElement.className;
				c = c.replace(/no-js/, 'js');
				document.documentElement.className = c;
			})();
			//]]>
		</script>
		
		<!--[if lt IE 9]><script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if lte IE 8]>
			<style type="text/css" media="screen">
				.css3-fix {
					behavior: url(http://dev.beapi.fr/base-theme-beapi/trunk/htc/PIE.htc);
				}
			</style>
		<![endif]-->
		
	</head>
	<body class="<?php echo $class; ?>">
		<div class="wrapper">
			<header class="header">
				<h1 class="logo">Website title</h1>
			</header>
			<nav class="main-menu">
				<ul>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
					<li><a href="#">menu item</a></li>
				</ul>
			</nav>