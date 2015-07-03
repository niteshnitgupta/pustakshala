<!doctype html>
<html>
<head>
<?php
$category="";
?>
<?php
if(! isset($book->title)) {
?>
<script type="text/javascript">
window.location.href="category/Philosophy";
</script>
<?php
die();
}
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
									<li><a href="https://www.muicss.com/roadmap"><?php if($this->session->has_userdata("username")){echo $this->session->userdata("username");} ?></a></li>
									<li><a href="https://www.muicss.com/support">My Books</a></li>
									<li id="logout" style="cursor:pointer"><a>Logout</a></li>
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
			<h1>Exchange</h1>
<br />
			<div class="container">
				<legend>Book's Details</legend>
				<div class="mui-form-group">
					<input type="text" id='txt_title' class="mui-form-control" style="font-size: 16px; cursor:default;" value="<?php echo $book->title;?>" disabled>
					<label class="mui-form-floating-label">Title</label>
				</div>
				<div class="mui-form-group">
					<input type="text" id='txt_isbn' class="mui-form-control" style="font-size: 16px; cursor:default;" value="<?php echo $book->isbn;?>" disabled>
					<label class="mui-form-floating-label">ISBN</label>
				</div>
				<div class="mui-form-group">
					<textarea class="mui-form-control" id='txt_desc' style="cursor:default;" disabled><?php echo $book->description;?></textarea>
					<label class="mui-form-floating-label">Description</label>
				</div>
				<div class="mui-form-group">
					<input type="number" class="mui-form-control" style="font-size: 16px; cursor:default;" value="<?php echo $book->price;?>" disabled>
					<label class="mui-form-floating-label">Price</label>
				</div>
				<div class="mui-form-group">
					<input type="number" class="mui-form-control" style="font-size: 16px; cursor:default;" value="<?php echo $book->year;?>" disabled>
					<label class="mui-form-floating-label">Year</label>
				</div>
<br />
				<h4><u>Categories</u></h4>
				<div class="row">
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Philosophy" name="category" value="1" <?php echo in_array(1, $categories)?"checked":"";?> />
					      		<label for="chkbox_Philosophy" style="font-size:15px; font-weight: normal;">Philosophy</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Drama" name="category" value="2" <?php echo in_array(2, $categories)?"checked":"";?> />
					      		<label for="chkbox_Drama" style="font-size:15px; font-weight: normal;">Drama</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Romance" name="category" value="3" <?php echo in_array(3, $categories)?"checked":"";?> />
					      		<label for="chkbox_Romance" style="font-size:15px; font-weight: normal;">Romance</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Satire" name="category" value="4" <?php echo in_array(4, $categories)?"checked":"";?> />
					      		<label for="chkbox_Satire" style="font-size:15px; font-weight: normal;">Satire</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Tragedy" name="category" value="5" <?php echo in_array(5, $categories)?"checked":"";?> />
					      		<label for="chkbox_Tragedy" style="font-size:15px; font-weight: normal;">Tragedy</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Comedy" name="category" value="6" <?php echo in_array(6, $categories)?"checked":"";?> />
					      		<label for="chkbox_Comedy" style="font-size:15px; font-weight: normal;">Comedy</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Tragicomedy" name="category" value="7" <?php echo in_array(7, $categories)?"checked":"";?> />
					      		<label for="chkbox_Tragicomedy" style="font-size:15px; font-weight: normal;">Tragicomedy</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Fiction" name="category" value="8" <?php echo in_array(8, $categories)?"checked":"";?> />
					      		<label for="chkbox_Fiction" style="font-size:15px; font-weight: normal;">Fiction</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_NonFiction" name="category" value="9" <?php echo in_array(9, $categories)?"checked":"";?> />
					      		<label for="chkbox_NonFiction" style="font-size:15px; font-weight: normal;">NonFiction</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Travel" name="category" value="10" <?php echo in_array(10, $categories)?"checked":"";?> />
					      		<label for="chkbox_Travel" style="font-size:15px; font-weight: normal;">Travel</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Science" name="category" value="11" <?php echo in_array(11, $categories)?"checked":"";?> />
					      		<label for="chkbox_Science" style="font-size:15px; font-weight: normal;">Science</label>
					</div>
					<div class="col s12 m4 l3">
					            <input type="checkbox" id="chkbox_Education" name="category" value="12" <?php echo in_array(12, $categories)?"checked":"";?> />
					      		<label for="chkbox_Education" style="font-size:15px; font-weight: normal;">Education</label>
					</div>
				</div>
<br />

				<div class="mui-select">
				    <select id="address">
				    <?php
				    	foreach ($address as $a) {
				    	?>
				    		<option value='<?php echo $a->id; ?>'><?php echo $a->address; ?></option>
				    	<?php
				    	}
				    ?>
				        <option value='-1'>ADD NEW ADDRESS</option>
				    </select>
				</div>
<br /><br />
				<button type="submit" id='btn_request' class="mui-btn mui-btn-default mui-btn-raised">Request Drop</button>
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

<div id="div_signup" style="display: none;">


<ul class="mui-tabs mui-tabs-justified">
  <li class="mui-active"><a data-mui-toggle="tab" data-mui-controls="pane-justified-1">Sign Up</a></li>
  <li><a data-mui-toggle="tab" data-mui-controls="pane-justified-2">Login</a></li>
</ul>
<div class="mui-tab-content">
  <div class="mui-tab-pane mui-active" id="pane-justified-1">
	<div id="frm_signup">
	  <div class="mui-form-group">
	    <input id="txt_signup_name" type="text" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Name</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_signup_email" type="email" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Email Address</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_signup_phone" type="number" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Phone</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_signup_password" type="password" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Password</label>
	  </div>
	  <button type="submit" id="btn_signup" class="mui-btn mui-btn-default mui-btn-raised">SIGNUP</button>
	</div>
  </div>

  <div class="mui-tab-pane" id="pane-justified-2">
  	<div id="frm_login">
	  <div class="mui-form-group">
	    <input id="txt_login_email" type="email" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Email Address</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_login_password" type="password" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Password</label>
	  </div>
	  <button type="submit" id="btn_login" class="mui-btn mui-btn-default mui-btn-raised">LOGIN</button>
	</div>
  </div>
</div>

</div>


  <div class="mui-tab-pane" id="addNewAddress" style="display: none;">
  	<div id="frm_address">
	  <div class="mui-form-group">
	    <textarea id="txt_add_address" class="mui-form-control" required></textarea>
	    <label class="mui-form-floating-label">Address</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_add_landmark" type="text" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Landmark</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_add_city" type="text" class="mui-form-control" required>
	    <label class="mui-form-floating-label">City</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_add_state" type="text" class="mui-form-control" required>
	    <label class="mui-form-floating-label">State</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_add_pincode" type="number" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Pincode</label>
	  </div>
	  <div class="mui-form-group">
	    <input id="txt_add_phone" type="number" class="mui-form-control" required>
	    <label class="mui-form-floating-label">Phone</label>
	  </div>
	  <button type="submit" id="btn_add_address" class="mui-btn mui-btn-default mui-btn-raised">ADD ADDRESS</button>
	</div>
  </div>



	<link rel="stylesheet" href="css/jquery-ui.css">
  	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/jquery.cookie.js"></script>

<script type="text/javascript">
<?php
		if (! $this->session->has_userdata("username")) {
			?>
			$.removeCookie('userid',{path: '/book' });
			<?php
		}
?>
	function IsEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	if ($.cookie("userid") == null || $.cookie("userid") == "" || $.cookie("userid") == undefined) {
		$("#div_signup").dialog({title:"Sign Up / Login",modal: true, closeOnEscape: false});
		$(".ui-dialog-titlebar").hide();
	}

	$("#btn_signup").click(function(){
		var name = $("#txt_signup_name").val();
		var email = $("#txt_signup_email").val();
		var phone = $("#txt_signup_phone").val();
		var password = $("#txt_signup_password").val();
		if($.trim(name) == "") {
			alert("Please provide Name");
			return;
		}
		if(IsEmail(email) === false) {
			alert("Please provide email");
			return;
		}
		if($.trim(password) == "") {
			alert("Please provide password");
			return;
		}

		$.post("user/register", {
			name: $("#txt_signup_name").val(),
			email: $("#txt_signup_email").val(),
			phone: $("#txt_signup_phone").val(),
			password: $("#txt_signup_password").val()
	    }, function (data, status) {
		    if (data == "DUPLICATE") {
			    alert("Email ID already exists !!");
		    } else {
			    $.cookie("userid",data,{ path: '/book' });
		    	$("#div_signup").dialog("close");
		    	location.reload();
		    }
	    });
	});


	$("#btn_login").click(function(){
		var email = $("#txt_login_email").val();
		var password = $("#txt_login_password").val();
		if(IsEmail(email) === false) {
			alert("Please provide email");
			return;
		}
		if($.trim(password) == "") {
			alert("Please provide password");
			return;
		}
		$.post("user/login", {
			email: $("#txt_login_email").val(),
			password: $("#txt_login_password").val()
	    }, function (data, status) {
		    if (data == "") {
			    alert("Invalid Email ID / Password");
		    } else {
			    $.cookie("userid",data,{ path: '/book' });
		    	$("#div_signup").dialog("close");
		    	location.reload();
		    }
	    });
	});


	$("#btn_request").click(function(){
		if($.trim(address) == "-1") {
			alert("Please provide address");
			return;
		}

		var isChecked = false;
		var checkedValues = [];
		$("input[name='category']").each(function(){
		    if ($(this).prop('checked')==true){
		    	isChecked = true;
		    	checkedValues.push($(this).val());
		    }
		});

		if (! isChecked) {
			alert("Please select atleast one category");
			return;
		}

		$.post("book/request_drop", {
			user_id:		$.cookie("userid"),
			book: 			<?php echo $book->id; ?>,
			address:		$("#address").val()

	    }, function (data, status) {
		    if (data == "" || data == "0") {
			    alert("OOPS!! Something went wrong! Prease try again");
		    } else if (data == "success") {
			    alert("Drop is requested successfully! We will get back to you soon!");
			    location.href="category/Philosophy";
		    } else {
		    	alert(data);
			    location.href="category/Philosophy";
		    }
	    });
	});

	$("#btn_add_address").click(function(){
		var address = $("#txt_add_address").val();
		var landmark = $("#txt_add_landmark").val();
		var city = $("#txt_add_city").val();
		var state = $("#txt_add_state").val();
		var pincode = $("#txt_add_pincode").val();
		var phone = $("#txt_add_phone").val();

		if($.trim(address) == "") {
			alert("Please provide address");
			return;
		}
		if($.trim(landmark) == "") {
			alert("Please provide landmark");
			return;
		}
		if($.trim(city) == "") {
			alert("Please provide city");
			return;
		}
		if($.trim(state) == "") {
			alert("Please provide state");
			return;
		}
		if($.trim(pincode) == "") {
			alert("Please provide pincode");
			return;
		}
		if($.trim(phone) == "") {
			alert("Please provide phone number");
			return;
		}

		$.post("user/add_address", {
			user_id: $.cookie("userid"),
			address: $("#txt_add_address").val(),
			landmark: $("#txt_add_landmark").val(),
			city: $("#txt_add_city").val(),
			state: $("#txt_add_state").val(),
			pincode: $("#txt_add_pincode").val(),
			phone: $("#txt_add_phone").val(),
			latitude: 0,
			longitude: 0
	    }, function (data, status) {
		    if (data == "") {
			    alert("Something went wrong");
		    } else {
			    $("#addNewAddress").dialog("close");
		    	location.reload();
		    }
	    });
	});


	$("#logout").click(function(){
		$.removeCookie('userid',{ path: '/book' });
		location.reload();
	});

	$("#address").click(function(){
		if ($("#address").val() == -1) {
			$("#addNewAddress").dialog({title:"Add New Address",modal: true, width:700, close: function(event, ui) { $("#address").val($("#address option:first").val()); }});
		}
	});

	$("#address").change(function(){
		if ($("#address").val() == -1) {
			$("#addNewAddress").dialog({title:"Add New Address",modal: true, width:700, close: function(event, ui) { $("#address").val($("#address option:first").val()); }});
		}
	});
</script>
</body>
</html>
