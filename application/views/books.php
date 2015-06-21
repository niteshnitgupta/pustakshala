<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Books</title>

    <!-- CSS  -->
    <link href="../css/materialize.css" type="text/css" rel="stylesheet">
    <link href="../css/style.css" type="text/css" rel="stylesheet" >
    <link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet" >
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
</head>
<body id="top" class="scrollspy">
<header>
	<ul id="nav-mobile" class="side-nav fixed" style="overflow:auto;">
		<li class="bold" style="background-color: #2196F3 !important;"><a style="color:#fff;">Pick Up</a></li>
		<li class="bold<?php echo ($category == "Philosophy")?" active":""; ?>">	<a href="<?php echo ($category == "Philosophy")?"#":"Philosophy"; ?>" class="waves-effect waves-teal">Philosophy</a></li>
        <li class="bold<?php echo ($category == "Drama")?" active":""; ?>">			<a href="<?php echo ($category == "Drama")?"#":"Drama"; ?>" class="waves-effect waves-teal">Drama</a></li>
        <li class="bold<?php echo ($category == "Romance")?" active":""; ?>">		<a href="<?php echo ($category == "Romance")?"#":"Romance"; ?>" class="waves-effect waves-teal">Romance</a></li>
        <li class="bold<?php echo ($category == "Satire")?" active":""; ?>">		<a href="<?php echo ($category == "Satire")?"#":"Satire"; ?>" class="waves-effect waves-teal">Satire</a></li>
        <li class="bold<?php echo ($category == "Tragedy")?" active":""; ?>">		<a href="<?php echo ($category == "Tragedy")?"#":"Tragedy"; ?>" class="waves-effect waves-teal">Tragedy</a></li>
        <li class="bold<?php echo ($category == "Comedy")?" active":""; ?>">		<a href="<?php echo ($category == "Comedy")?"#":"Comedy"; ?>" class="waves-effect waves-teal">Comedy</a></li>
        <li class="bold<?php echo ($category == "Tragicomedy")?" active":""; ?>">	<a href="<?php echo ($category == "Tragicomedy")?"#":"Tragicomedy"; ?>" class="waves-effect waves-teal">Tragicomedy</a></li>
        <li class="bold<?php echo ($category == "Fiction")?" active":""; ?>">		<a href="<?php echo ($category == "Fiction")?"#":"Fiction"; ?>" class="waves-effect waves-teal">Fiction</a></li>
        <li class="bold<?php echo ($category == "NonFiction")?" active":""; ?>">	<a href="<?php echo ($category == "NonFiction")?"#":"NonFiction"; ?>" class="waves-effect waves-teal">NonFiction</a></li>
        <li class="bold<?php echo ($category == "Travel")?" active":""; ?>">		<a href="<?php echo ($category == "Travel")?"#":"Travel"; ?>" class="waves-effect waves-teal">Travel</a></li>
        <li class="bold<?php echo ($category == "Science")?" active":""; ?>">		<a href="<?php echo ($category == "Science")?"#":"Science"; ?>" class="waves-effect waves-teal">Science</a></li>
        <li class="bold<?php echo ($category == "Education")?" active":""; ?>">		<a href="<?php echo ($category == "Education")?"#":"Education"; ?>" class="waves-effect waves-teal">Education</a></li>
      </ul>
</header>
<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper"><a id="logo-container" href="#top" class="brand-logo">Books</a>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Work-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b" id="category"><?php echo $category; ?></h2>
        <div class="row">
        <?php
        	if(empty($books)) {
        		echo "<center><h4>Sorry !! There is no book in this category.</h4></center>";
        	}
        	foreach ($books as $book) {
        ?>
	        	<div class="col s12 m4 l4">
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

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="../img/parallax1.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Our Team </h2>
        <div class="row">
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="../img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Flash <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="../img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Cat Woman<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="../img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Capt. America <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CMO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="../img/avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Robin<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
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
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit" name="action">Submit
                                <i class="mdi-content-send right white-text"></i>
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
                            <i class="small fa fa-twitter-square white-text"></i> Twitter
                        </a>
                    </li>
                    <li>&nbsp; </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/joash.c.pereira">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>&nbsp; </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/joashp">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
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


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>

    </body>
</html>