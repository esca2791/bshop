<?php
session_start();
$currentPage = "contact.php";
$id = @$_SESSION['btID'];
$email = @$_SESSION['btEmail'];
/*if($id == "") {
	//then visitor
	$_SESSION['btID'] = "visitor";
	$id = "visitor";
	$email = @$_SESSION['btEmail'];
} else {
	//registered user and logged in
	
}*/ include('templates/nav.php');?>
<style>
label{margin-top:24px;}
button{margin-top:24px;}
</style>
		<div class="col-lg-4 text-left" style="margin-top:25px;margin-left:25px;">
			<div class="panel panel-default">
				<div class="panel-body">
					<h1>Contact Us!  <i class="glyphicon-envelope" style="width:30px;height:30px;"></i></h1>
		<form role="form" action="" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Your Email address</label>
				<input type="email" class="form-control" value="<?php echo $email;?>" id="exampleInputEmail1" placeholder="Enter your email address">
				<label for="exampleInputPassword1">Subject</label>
				<textarea class="form-control" id="mail_subject"></textarea>
			<button type="submit" class="btn btn-success">Send it!</button>
			</div>
		</form>
					
				</div>
			</div>
		</div>

	</body>
</html>
