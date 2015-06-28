<!doctype html>
<html>
<head>
<?php
$category="";
?>
<link rel="stylesheet" type="text/css" media="screen" href="css/mui.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/materialize_mui.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style_mui.css">
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet" >

<script src="js/mui.js"></script>
<script src="js/jquery.js"></script>

<script src="js/script.js" async=""></script>
<link href="css/ionicons.css" rel="stylesheet" type="text/css" />
<style>
    .step:hover i { opacity: .3; }
    .size-12 { font-size: 12px; }
    .size-14 { font-size: 14px; }
    .size-16 { font-size: 16px; }
    .size-18 { font-size: 18px; }
    .size-21 { font-size: 21px; }
    .size-24 { font-size: 24px; }
    .size-32 { font-size: 32px; }
    .size-48 { font-size: 48px; }
    .size-64 { font-size: 64px; }
    .size-96 { font-size: 96px; }
</style>
</head>
<body>


	<header id="header">
		<nav id="appbar" class="mui-container-fluid">
			<table width="100%">
				<tbody>
					<tr class="mui-appbar-height">
						<td><a id="appbar-sidenav-show" class="mui-visible-xs-inline-block size-21"><i class="ion-ios-keypad"></i> </a>
							<a id="appbar-sidenav-hide" class="mui-hidden-xs size-21"><i class="ion-ios-keypad"></i> </a> <a class="appbar-brand">BOOK S</a>
						</td>
						<td class="mui-text-right">
							<a class="mui-btn btn-accent" href="https://github.com/muicss/mui" style="margin-top:-5px;">Cart</a>
							<div class="mui-dropdown">
								<a id="appbar-more-vert" data-mui-toggle="dropdown" class="size-24" style="margin-top:15px;"><i class="ion-android-more-vertical"></i> </a>
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
	<div id="sidedrawer" style="box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.16), 0px 2px 10px 0px rgba(0, 0, 0, 0.12);">
		<nav id="sidenav" >
			<div>
				<a href="pickup">
					<div class="mui-appbar-line-height" style="background-color: #2196f3; color:#fff; padding: 0px 35px;font-size: 15px;font-family: "Roboto",sans-serif;">
						<b>Pick Up</b>
					</div>
				</a>
			</div>
			<div class="mui-divider"></div>
			<ul>
		<li class="bold<?php echo ($category == "Philosophy")?" active":""; ?>">	<span><a href="category/<?php echo ($category == "Philosophy")?"#":"Philosophy"; ?>" class="waves-effect waves-teal">Philosophy</a></span></li>
        <li class="bold<?php echo ($category == "Drama")?" active":""; ?>">			<span><a href="category/<?php echo ($category == "Drama")?"#":"Drama"; ?>" class="waves-effect waves-teal">Drama</a></span></li>
        <li class="bold<?php echo ($category == "Romance")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Romance")?"#":"Romance"; ?>" class="waves-effect waves-teal">Romance</a></span></li>
        <li class="bold<?php echo ($category == "Satire")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Satire")?"#":"Satire"; ?>" class="waves-effect waves-teal">Satire</a></span></li>
        <li class="bold<?php echo ($category == "Tragedy")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Tragedy")?"#":"Tragedy"; ?>" class="waves-effect waves-teal">Tragedy</a></span></li>
        <li class="bold<?php echo ($category == "Comedy")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Comedy")?"#":"Comedy"; ?>" class="waves-effect waves-teal">Comedy</a></span></li>
        <li class="bold<?php echo ($category == "Tragicomedy")?" active":""; ?>">	<span><a href="category/<?php echo ($category == "Tragicomedy")?"#":"Tragicomedy"; ?>" class="waves-effect waves-teal">Tragicomedy</a></span></li>
        <li class="bold<?php echo ($category == "Fiction")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Fiction")?"#":"Fiction"; ?>" class="waves-effect waves-teal">Fiction</a></span></li>
        <li class="bold<?php echo ($category == "NonFiction")?" active":""; ?>">	<span><a href="category/<?php echo ($category == "NonFiction")?"#":"NonFiction"; ?>" class="waves-effect waves-teal">NonFiction</a></span></li>
        <li class="bold<?php echo ($category == "Travel")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Travel")?"#":"Travel"; ?>" class="waves-effect waves-teal">Travel</a></span></li>
        <li class="bold<?php echo ($category == "Science")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Science")?"#":"Science"; ?>" class="waves-effect waves-teal">Science</a></span></li>
        <li class="bold<?php echo ($category == "Education")?" active":""; ?>">		<span><a href="category/<?php echo ($category == "Education")?"#":"Education"; ?>" class="waves-effect waves-teal">Education</a></span></li>
			</ul>
		</nav>

	</div>


	<div id="content-wrapper">
		<div id="appbar-placeholder" class="mui-appbar-height"></div>
		<div class="mui-container-fluid">
			<!-- example content -->

<br />
			<h1>Pick Up</h1>
<br />
			<div class="container">
				<div class="row">
				    	<div class="col s12 m3">
			                <div class="card">
			                    <div class="card-image waves-effect waves-block waves-light">
			                        <img class="activator" src="img/project1.jpg">
			                    </div>
			                    <div class="card-content">
			                        <span class="card-title activator grey-text text-darken-4">  <i class="mdi-navigation-more-vert right"></i></span>
			                        <p><a>Price  points</a><i class="mdi-action-done-all right" style='color: #2196F3;'></i></p>
			                    </div>
			                    <div class="card-reveal">
			                        <span class="card-title grey-text text-darken-4"> <i class="mdi-navigation-close right"></i></span>
			                        <p></p>
			                    </div>
			                </div>
			            </div>
				</div>
			</div>
		</div>
	</div>




<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">
        <div class="row">
            <div class="col l9 s12">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="ion-android-person prefix white-i"></i>
                            <input id="icon_prefix" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="ion-android-mail prefix white-text"></i>
                            <input id="icon_email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="ion-android-create prefix white-text"></i>
                            <textarea id="icon_prefix2" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit" name="action" style="font-size: 1.7rem;">Submit
                                <i class="ion-android-send right white-text" style="font-size: 1.7rem;"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l1 s12">
                &nbsp;
            </div>
            <div class="col l2 s12">
                <ul>
                    <li>
                        <a class="white-text" href="https://www.behance.net/joashp">
                            <i class="small fa fa-twitter-square white-text" style="font-size: 3rem !important;"></i> Twitter
                        </a>
                    </li>
                    <li>&nbsp; </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/joash.c.pereira">
                            <i class="small fa fa-facebook-square white-text" style="font-size: 3rem !important;"></i> Facebook
                        </a>
                    </li>
                    <li>&nbsp; </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/joashp">
                            <i class="small fa fa-linkedin-square white-text" style="font-size: 3rem !important;"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Designed by <a class="white-text" href="http://facebook.com/nitesh.nit.gupta" target="_blank">Nitesh Gupta</a>
        </div>
    </div>
</footer>




	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
</body>
</html>
