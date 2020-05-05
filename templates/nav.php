    <!-- Bootstrap core CSS -->
    <link href="/projects/bookshop/assets/css/bootstrap.css" rel="stylesheet"/>
	<link href="/projects/bookshop/assets/css/half-slider.css" rel="stylesheet"/>
    <!-- Add custom CSS here -->
    <style>
	body {margin-top: 60px;}
    </style>
	<!-- JavaScript -->
	<script type="text/javascript" src="/projects/bookshop/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/projects/bookshop/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/projects/bookshop/assets/js/global.js"></script>
<!--[if lt IE 9]>  
    <script src="/projects/bookshop/assets/js/html5shiv.js"></script>
    <script src="/projects/bookshop/assets/js/respond.js"></script>
<![endif]-->
  </head>
<body>

<!-- style="background:#121414;" -->

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" id="fadeTitle" href="/projects/bookshop" style="font-size:30px;">OTTOBOOKS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
			<li <?php if(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == "index.php") { ?> class="active" <?php } ?>><a href="/projects/bookshop/index">Home</a></li>
            <li <?php if(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == "about.php") { ?> class="active" <?php } ?>><a href="/projects/bookshop/about">About</a></li>
            <li <?php if(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1) == "contact.php") { ?> class="active" <?php } ?>><a href="/projects/bookshop/contact">Contact</a></li>
			
			<?php
				if($id == "visitor") {
			?>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" id="showSignIn" data-toggle="modal" data-target="#myModal">Sign In</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
			<?php
				} else {
			?>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                <ul class="dropdown-menu">
                	<li class="nav-header">Choices</li>
						<li><a href="/projects/bookshop/profile/profile">Profile</a></li>
						<li><a href="/projects/bookshop/actions/addItem">Add an Item</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Leave</li>
                  <li><a href="/projects/bookshop/actions/logout">Logout</a></li>
                </ul>
              </li>
			<?php
				}
			?>
          </ul>
		  
			<?php if($id == "verified") { ?><div class="pull-right" style="margin-top:10px;margin-left:200px;">
				<a href="/projects/bookshop/profile/profile" class="btn btn-primary">My Account</a>  |  <a href="/projects/bookshop/actions/logout" class="btn btn-primary">Sign Out</a>
			</div><?php } if($id=="visitor") { ?>
			<div class="pull-right" style="margin-top:10px;margin-left:200px;">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Sign In</button> | <button class="btn btn-primary" data-toggle="modal" data-target="#myModal2">Sign Up!</button>
			</div>
			<?php } ?>
        </div><!-- /.navbar-collapse -->		
      </div><!-- /.container -->
    </nav>
	
	
	
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Welcome Back!</h2>
      </div>
      <div class="modal-body">
	  <form role="form" action="/projects/bookshop/actions/login" method="POST">
			<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="username">
			</div>
			<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
			</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Login</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Let's Get Started!</h2>
      </div>
      <div class="modal-body">
	  <form role="form" action="/projects/bookshop/actions/create" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="inputPassword1" name="password1" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Confirm Password</label>
				<input type="password" class="form-control" id="inputPassword2" name="passwordConfirm" placeholder="Password">
			</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" disabled id="limiter">Passwords Must Match</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
		</form>
		<!--<div id="limiterText"></div>-->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
$(document).ready(function() {
	$("#inputPassword2").keyup(function(){
	//alert($("#inputPassword2").val());
		console.log("pc:  " + $("#inputPassword2").val() + "  po" + $("#inputPassword1").val());
		$("#limiterText").text($("#inputPassword2").val() + "  " + $("#inputPassword1").val());
		if($("#inputPassword1").val() == $("#inputPassword2").val()) {
			//alert("matched");
			$("#limiter").html("Continue");
			$("#limiter").removeAttr("disabled");
		} else {
			$("#limiter").html("Passwords Must Match");
			$("#limiter").attr("disabled","disabled");
		}
	});
});
</script>