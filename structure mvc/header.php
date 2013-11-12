<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Save my Smartphone.</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,600,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.form.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script>
    $(function(){
      // bind change event to select
      $('.mob-menu').bind('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>	</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->
 <div class="cloud-container">
	<div class="container">
	   <div class="sixteen colums">
	   		<div class="row">
		      <div class="four columns alpha">
			      <a href="index.php"><img src="img/logo.png" alt="logo" width="100%" /></a>
		      </div>
		      <div class="twelve columns omega">
			       <nav>
					    <ul id="nav">
						    <li <?php if ($page == 'index.php') { ?>class="active"<?php } ?>><a href="index.php">Accueil</a></li>
						    <li <?php if ($page == 'reparations.php'|| $page == 'models.php'||$page == 'service_type.php'||$page == 'services.php') { ?>class="active"<?php } ?>><a href="reparations.php">Réparations</a></li>
						    <li>Professionnels</li>
						    <li>Accessoires</li>
						    <li <?php if ($page == 'medias.php') { ?>class="active"<?php } ?>><a href="medias.php">Médias</a></li>
						    <li <?php if ($page == 'contact.php') { ?>class="active"<?php } ?>><a href="contact.php">Contactez-nous</a></li>
					    </ul>
					    <select class="mob-menu">
					    <option>Menu</option>
						  <option value="index.php">Accueil</option>
						  <option value="reparations.php">Réparations</option>
						  <option value="#">Professionnels</option>
						  <option value="#">Accessoires</option>
						  <option value="medias.php">Médias</option>
						  <option value="contact.php ">Contactez-nous</option>
						</select>
		           </nav>
		         </div>
		      </div><!-- row end -->
		      <div class="clearfix"></div>