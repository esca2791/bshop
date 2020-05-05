<!DOCTYPE html>
<html lang="en">
<?php include('../templates/nav.php');?>
	<div class="col-lg-6 text-left">
	<?php
	echo $result;
	?>
			<div class="panel panel-default">
				<div class="panel-body">
				<?php
					if($alerts != "") {
						echo $alerts;
					} else {
				?>
					<h1>Please try logging in again:  </h1>
				<?php } $_SESSION['loginAlertHTML'] = ""; ?>
		<form role="form" action="login" method="POST">
			<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
			</div>
			<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
			</div>
			<button type="submit" class="btn btn-primary">LOGIN</button>
		</form>
		<h2>OR</h2>
		<a class="btn btn-danger">Forgot my Password</a>
					
				</div>
			</div>
		</div>

	
  </body>
</html>