<?php
	ob_start();
	session_start();
	$id = @$_SESSION['btID'];
	$user = @$_SESSION['btUser'];
	$passport = @$_SESSION['btPassport'];
	$contentId = @$_SESSION['contentId'];
	include('../templates/nav.php');
?>

	<div class="col-lg-6 text-left">
			<div class="panel panel-default">
				<div class="panel-body">
					<h1><i class="glyphicon glyphicon-book"></i>  List an item now!  It's easy!</h1>
					
		<form role="form" action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="itemName">Item Name</label>
				<input type="text" name="itemName" value="<?php echo @$_POST['itemName']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Any name you like, for your reference...">
			</div>
			<div class="form-group">
				<label for="isbn">ISBN Number</label>
				<input type="text" name="isbnNumber" value="<?php echo @$_POST['isbnNumber']; ?>" class="form-control" id="isbnName" placeholder="Enter the ISBN Number (optional)">
			</div>
			<div class="form-group">
				<label for="price">Item Price</label>
				<input type="text" name="itemPrice" class="form-control" id="iprice" value="<?php echo @$_POST['itemPrice']; ?>" placeholder="The price of the book...nothing over $1000 please!">
			</div>
			<div class="form-group">
				<label for="picture">Item Picture...show off that wear and tear</label>
				<input type="file" name="itemPicture" class="form-control" id="ipicture" placeholder="Show off that wear and tear...">
			</div>
			<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>  List it!</button>
			<?php 
				if($_SERVER['HTTP_REFERER'] == "http://www.omicronconnections.com/projects/bookshop/actions/addItem") {
					?>
					<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Please complete all fields.</div>
					<?php
				}
			?>
		</form>
				</div>
			</div>
		</div>
<?php
			$itemName = @$_POST['itemName'];
			$isbnNumber = @$_POST['isbnNumber'];
			$itemPrice = @$_POST['itemPrice'];
			
			if($itemName != "" && $isbnNumber != "" && $itemPrice != "") {
				//pass data to createUser();				
				require_once "../WEB-INF/CoreClasses.php";
				try {
					//INSERT FILE
					$info = pathinfo($_FILES['itemPicture']['name']);
					$ext = $info['extension']; // get the extension of the file
					$newname = md5(date("Y-M-D H:i"));
					$newname = $newname.".".$ext;
					$target = '/home1/esca2791/public_html/projects/bookshop/assets/img/items/'.$newname;
					move_uploaded_file( $_FILES['itemPicture']['tmp_name'], $target);
					$result = Item::createItem($contentId,$itemName,$isbnNumber,$itemPrice,$newname);
					echo $result;
					$_SESSION['btUserItems'] = Item::getItems($contentId);
					if($result == "Success") {
						ob_end_clean();
						$_SESSION['btHTMLALERT'] = '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Thank you for listing '.$itemName.'!</div>';
						header('location:  /projects/bookshop/profile/profile');
						ob_end_flush();
					} else {
						echo "ERROR";
					}
				} catch(PDOException $e) {
					echo "<h1>Sorry, an error occurred...";
				}
			}
?>
	
  </body>
</html>
