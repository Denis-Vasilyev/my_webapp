<!DOCTYPE html>
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>APPLICATION SYSTEM</title>
		<style>
			#logo a {
				color: #fffffd;
				text-shadow: black 0px 0px 7px;
				text-decoration: none;
				font-family: "Open Sans", sans-serif;
				font-size: 45px;
			}
			#logo img {
				margin-left: 70px;
				vertical-align: middle;
			}
			.box img {
				margin: 0px 20px 0px 0px;
				border: solid 1px #e3e3e3;
			}
		</style>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="application/views/stylesheets/jquery.gridly.css" rel="stylesheet" type="text/css"><style type="text/css"></style>
		<link href="application/views/stylesheets/sample.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="application/views/javascripts/jquery.gridly.js" type="text/javascript"></script>
		<script src="application/views/javascripts/sample.js" type="text/javascript"></script>
		<script src="application/views/javascripts/rainbow.js" type="text/javascript"></script>		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		
		
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper" class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div id="header" class="row">
					<div class="col-md-3"><br /><br /><br /><br />
						<img src="application/views/images/velo.jpg" alt="velo.jpg"></img>
					</div>
					<div class="col-md-5"><br /><br /><br /><br />
						<div id="logo">
							<a href="/"><span class="cms">APPLICATION</span> <span class="cms">SYSTEM</span></a>
						</div>
						<div>
							<span>система управления заявками</span>
						</div>
					</div>
					<div class="col-md-4"><br />
						<div id="sidebar">
							<div class="side-box">
								<!--h3>********************************</h3-->
								<?php include 'application/views/'.$login_view; ?>	
							</div>
							<div class="side-box">
								<h3>Случайная цитата</h3>
								<p align="justify" class="quote">
								«Сайт, как живой организм, изменяется и развивается.
								Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
								</p>
								<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
								«Все должно быть очень просто, как текстовый файл и при этом функционально
								и тогда пользователи от нас уйдут»
								</p>
								<p align="justify" class="quote">
								«Критика - это когда критик объясняет автору, как сделал бы он, если бы умел»
								</p>
								<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
								«Сумасшедшим становиться тот, кто попытался разобраться в этом сумасшедшем мире»
								</p>
								<p align="justify" class="quote">
								«Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
								новичок каждый раз делает шаг в неизвестность»
								</p>
							</div>							
						</div>
					</div>					
				</div>
				<div id="page" class="row">
					<div class="col-md-12">						
						<div id="content">
							<div class="box">
								<?php include 'application/views/'.$content_view; ?>
								<!--
								<h2>Welcome to Accumen</h2>
								<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
								<p>
									This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
								</p>
								-->
							</div>
						</div>
					</div>
				</div>
				<div id="page-bottom" class="row">
					<div class="col-md-4">
						<div id="page-bottom-sidebar">
							<h3>Наши контакты</h3>
							<ul class="list">
								<li class="first">icq: 999999999</li>
								<li>skypeid: appsystem</li>
								<li class="last">email: appsystem@domain.com</li>
							</ul>
						</div>
					</div>
					<div class="col-md-8">
						<div id="page-bottom-content">
							<h3>О Компании</h3>
							<p style="text-align: justify;">	Вот дом.
								Который построил Джек.

								А это пшеница.
								Которая в тёмном чулане хранится
								В доме,
								Который построил Джек.

								А это весёлая птица-синица,
								Которая ловко ворует пшеницу,
								Которая в тёмном чулане хранится
								В доме,
								Который построил Джек.

								Вот кот,
								Который пугает и ловит синицу,
								Которая ловко ворует пшеницу,
								Которая в тёмном чулане хранится
								В доме,
								Который построил Джек.
							</p>
						</div>
					</div>
				</div>		
				<div id="footer"  class="row">
					<div class="col-md-12" style="text-align: center;"><br /><br />
						<a href="/">APPLICATION SYSTEM</a> &copy; 2017</a>
					</div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</body>
</html>