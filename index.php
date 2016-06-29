<?php
/**
 * Created by PhpStorm.
 * User: jbrashear
 * Date: 6/29/16
 * Time: 4:02 PM
 */
include'feed.php'
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Example Bootstrap Review with TrustPilot</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body>
<!-- Good place to put the Nav -->

<div class="container">

  <div class="text-center">
    <h1></h1>
    <p class="lead">Third Party review <br> From TrustPilot </br> <?=logo();?></p>
  </div>
    <div class="row">
        <?=showreviews();?>
    </div>

</div><!-- /.container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>