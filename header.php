<?php require_once('sessionauth.php'); ?>
<!DOCTYPE html>
<!--TouchStartup: Whiteboard Redesign by Robert Rotaru, Yan Huang, John Cerillo, and Gibsan Abdu-->
<!--Based off of ResponsiveGridSystem by Graham Miller-->
<!--http://www.responsivegridsystem.com/-->

<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>touch Startup</title>
	<meta name="description" content="TouchStartup is an easy way to connect with the New Haven startup community.">
	<meta name="keywords" content="startup, innovation, jobs, internships, community, new haven">

	<meta name="author" content="A100 Group 3">

	<meta http-equiv="cleartype" content="on">

	<link rel="shortcut icon" href="/favicon.ico">

	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/html5reset.css" media="all">
	<link rel="stylesheet" href="css/responsivegridsystem.css" media="all">
	<link rel="stylesheet" href="css/col.css" media="all">
	<link rel="stylesheet" href="css/2cols.css" media="all">
	<link rel="stylesheet" href="css/3cols.css" media="all">
	<link rel="stylesheet" href="css/4cols.css" media="all">
	<link rel="stylesheet" href="css/5cols.css" media="all">
	<link rel="stylesheet" href="css/6cols.css" media="all">
	<link rel="stylesheet" href="css/7cols.css" media="all">
	<link rel="stylesheet" href="css/8cols.css" media="all">
	<link rel="stylesheet" href="css/9cols.css" media="all">
	<link rel="stylesheet" href="css/10cols.css" media="all">
	<link rel="stylesheet" href="css/11cols.css" media="all">
	<link rel="stylesheet" href="css/12cols.css" media="all">
  <link rel="stylesheet" href="css/flip.css" media="all">
  <link rel="stylesheet" href="css/common.css" media="all">

  <!--Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700' rel='stylesheet' type='text/css'>
  

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>
	
  <!--PHP/MYSQL database configuration-->
  <?php require_once('config/config.php'); ?>

</head>

<body>

<div id="skiptomain"><a href="#maincontent">skip to main content</a></div>

<div id="wrapper">
	<div id="headcontainer">
		<header>
		<h1><a id="title-href" href="index.html"><span class="headcolor">touch</span>Startup</a></h1>
		</header>
	</div>
	<div id="maincontentcontainer">
		<div id="maincontent">

      <?php require_once('navigation.php'); ?>
