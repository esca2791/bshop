<?php
	ob_start();
	session_start();
	$id = @$_SESSION['btID'];
	if($id != "visitor" || @$_SESSION['accountCreated'] == "success") {
		header('location:  http://localhost/projects/bookshop/profile/profile.php');
	}
	//if(!preg_match("/www.omicronconnections.com/i",$orig)) header('location: /errors/index.html');
	$_SESSION['btsignupemail'] = @$_POST['email'];
	$_SESSION['btsignuppassword'] = @$_POST['password1'];
	$persistentEmail = $_SESSION['btsignupemail'];
	$persistentPassword = $_SESSION['btsignuppassword'];
	if(!isset($_SERVER['HTTP_REFERER'])) {
		header('location:  /projects/bookshop/');
	}
	include('../templates/nav.php');
?>

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script type="text/javascript">
$(document).ready(function() {
$("#dob").datepicker({changeMonth:true,changeYear:true,dateFormat:"yy-mm-dd",maxDate:'0',yearRange:'1950:2012'});
});
</script>

	<div class="col-lg-6 text-left">
			<div class="panel panel-default">
				<div class="panel-body">
					<h1><?php echo "Welcome ".$persistentEmail."!";?>  </h1>
					
		<form role="form" action="" method="POST">
			<div class="form-group">
				<input type="text" name="email" value="<?php echo $persistentEmail; ?>" hidden />
				<input type="text" name="password" value="<?php echo $persistentPassword; ?>" hidden />
				<label for="exampleInputEmail1">First Name</label>
				<input type="text" name="firstName" class="form-control" id="exampleInputEmail1" placeholder="Enter your first name">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Last Name</label>
				<input type="text" name="lastName" class="form-control" id="exampleInputPassword1" placeholder="Enter your last name">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Date of Birth</label>
				<input type="text" name="dob" class="form-control" id="dob" placeholder="Enter your Date of Birth">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Gender</label>
				<div class="radio">
					<label><input type="radio" name="gender" id="optionsRadios1" value="female">Female</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="gender" id="optionsRadios2" value="male">Male</label>
				</div>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Current University</label>
				<input type="text" name="university" class="form-control" id="exampleInputPassword1" placeholder="The university you are currently attending">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Current Status</label>
				<select class="form-control" name="status">
					<option value="freshman">Freshman</option>
					<option value="sophomore">Sophomore</option>
					<option value="junior">Junior</option>
					<option value="senior">Senior</option>
					<option value="gradStudent">Graduate Student</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Join!</button>
		</form>					
				</div>
			</div>
		</div>
<?php
			$username = @$_POST['email'];
			$password = @$_POST['password'];
			$firstName = @$_POST['firstName'];
			$lastName = @$_POST['lastName'];
			$currentUniversity = @$_POST['university'];
			$gender = @$_POST['gender'];
			$status = @$_POST['status'];
			$expectedGradDate = "";
			$_SESSION['btHTMLALERT'] = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h1> Thank you for joining!  You can add a profile picture by clicking on the gray box at the left...of course this will change in production.</h1></div>';
			if($firstName != "" && $lastName != "" && $currentUniversity != "" && $gender != "" && $status != "") {
				//pass data to createUser();
				$age = 20;
				echo "Data:  ".$username."  ".$password."  ".$firstName."  ".$lastName."  ".$currentUniversity."  ".$gender."  ".$age."  ".$status;
				require_once "../WEB-INF/CoreClasses.php";
				try {
					User::createUser($username,$password,$firstName,$lastName,$gender,$age,$currentUniversity,$status,$expectedGradDate);
					//echo "<script>window.location='http://localhost/projects/bookshop/profile/profile.php';</script>";
					ob_end_clean();
					header('location:  /projects/bookshop/profile/profile.php');
					ob_end_flush();
				} catch(PDOException $e) {
					echo "<h1>Sorry, an error occurred...";
				}
			} else {
				echo "<h1>Please complete all fields...</h1>";
			}
?>
	
  </body>
</html>