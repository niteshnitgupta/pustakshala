<!doctype html>
<html>
<head>

<link rel="stylesheet" type="text/css" media="screen" href="../css/mui.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/materialize_mui.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/style_mui.css">

<script src="../js/mui.js"></script>
<script src="../js/jquery.js"></script>

<script src="../js/script.js" async=""></script>


</head>
<body>


	<header id="header">
		<nav id="appbar" class="mui-container-fluid">
			<table width="100%">
				<tbody>
					<tr class="mui-appbar-height">
						<td><a id="appbar-sidenav-show" class="mui-visible-xs-inline-block"><i class="icon-menu"></i> </a>
							<a id="appbar-sidenav-hide" class="mui-hidden-xs"><i class="icon-menu"></i> </a> <a class="appbar-brand">BOOK S</a>
						</td>
						<td class="mui-text-right">
							<a class="mui-btn btn-accent mui-hidden-xs" href="https://github.com/muicss/mui">Cart Will Come Here</a>
							<div class="mui-dropdown">
								<a id="appbar-more-vert" data-mui-toggle="dropdown"><i class="icon-more-vert"></i> </a>
								<ul class="mui-dropdown-menu mui-dropdown-menu-right">
									<li><a href="https://www.muicss.com/roadmap">Menu 1</a></li>
									<li><a href="https://www.muicss.com/support">Menu 2</a></li>
									<li><a href="https://www.muicss.com/support">Menu 3</a></li>
									<li><a href="https://www.muicss.com/support">Menu 4</a></li>
								</ul>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</nav>
	</header>
	<div id="sidedrawer">
		<nav id="sidenav">
			<div>
				<h2 class="mui-appbar-line-height">Logo</h2>
			</div>
			<div class="mui-divider"></div>
			<ul>
		<li class="bold<?php echo ($category == "Philosophy")?" active":""; ?>">	<strong><a href="<?php echo ($category == "Philosophy")?"#":"Philosophy"; ?>" class="waves-effect waves-teal">Philosophy</a></strong></li>
        <li class="bold<?php echo ($category == "Drama")?" active":""; ?>">			<strong><a href="<?php echo ($category == "Drama")?"#":"Drama"; ?>" class="waves-effect waves-teal">Drama</a></strong></li>
        <li class="bold<?php echo ($category == "Romance")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Romance")?"#":"Romance"; ?>" class="waves-effect waves-teal">Romance</a></strong></li>
        <li class="bold<?php echo ($category == "Satire")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Satire")?"#":"Satire"; ?>" class="waves-effect waves-teal">Satire</a></strong></li>
        <li class="bold<?php echo ($category == "Tragedy")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Tragedy")?"#":"Tragedy"; ?>" class="waves-effect waves-teal">Tragedy</a></strong></li>
        <li class="bold<?php echo ($category == "Comedy")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Comedy")?"#":"Comedy"; ?>" class="waves-effect waves-teal">Comedy</a></strong></li>
        <li class="bold<?php echo ($category == "Tragicomedy")?" active":""; ?>">	<strong><a href="<?php echo ($category == "Tragicomedy")?"#":"Tragicomedy"; ?>" class="waves-effect waves-teal">Tragicomedy</a></strong></li>
        <li class="bold<?php echo ($category == "Fiction")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Fiction")?"#":"Fiction"; ?>" class="waves-effect waves-teal">Fiction</a></strong></li>
        <li class="bold<?php echo ($category == "NonFiction")?" active":""; ?>">	<strong><a href="<?php echo ($category == "NonFiction")?"#":"NonFiction"; ?>" class="waves-effect waves-teal">NonFiction</a></strong></li>
        <li class="bold<?php echo ($category == "Travel")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Travel")?"#":"Travel"; ?>" class="waves-effect waves-teal">Travel</a></strong></li>
        <li class="bold<?php echo ($category == "Science")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Science")?"#":"Science"; ?>" class="waves-effect waves-teal">Science</a></strong></li>
        <li class="bold<?php echo ($category == "Education")?" active":""; ?>">		<strong><a href="<?php echo ($category == "Education")?"#":"Education"; ?>" class="waves-effect waves-teal">Education</a></strong></li>
			</ul>
		</nav>

	</div>


	<div id="content-wrapper">
		<div id="appbar-placeholder" class="mui-appbar-height"></div>
		<div class="mui-container-fluid">
			<!-- example content -->

<br />
			<h1><?php echo $category; ?></h1>
<br />
			<div class="container">
				<div class="row">
				<?php
		        	if(empty($books)) {
		        		echo "<center><h4>Sorry !! There is no book in this category.</h4></center>";
		        	}
		        	foreach ($books as $book) {
		        ?>
			        	<div class="col s12 m3">
			                <div class="card">
			                    <div class="card-image waves-effect waves-block waves-light">
			                        <img class="activator" src="../img/project1.jpg">
			                    </div>
			                    <div class="card-content">
			                        <span class="card-title activator grey-text text-darken-4"> <?php echo $book->title; ?> <i class="mdi-navigation-more-vert right"></i></span>
			                        <p><a>Price <?php echo $book->price; ?> points</a><i class="mdi-action-done-all right" style='color: #2196F3;'></i></p>
			                    </div>
			                    <div class="card-reveal">
			                        <span class="card-title grey-text text-darken-4"><?php echo $book->title; ?> <i class="mdi-navigation-close right"></i></span>
			                        <p><?php echo $book->description; ?> </p>
			                    </div>
			                </div>
			            </div>
		        <?php
		        	}
		        ?>
				</div>
			</div>
		</div>






	</div>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../js/materialize.js"></script>
</body>
</html>
