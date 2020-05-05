<?php
	session_start();
	$id = @$_SESSION['btID'];
	$user = @$_SESSION['btUser'];
	$_SESSION['btEmail'] = @$_SESSION['btUser'];
	$passport = @$_SESSION['btPassport'];
	$contentId = @$_SESSION['contentId'];
	$alerts = @$_SESSION['btHTMLALERT'];
	$items = @$_SESSION['btUserItems'];
	if($passport == "") {
		$_SESSION['loginAlertHTML'] = '<h2>Please login</h2>';
		header("location:  /projects/bookshop/actions/login.php");
	}
	include('../templates/nav.php');
?>
	<div class="mainContent">
	
	<?php 
		if($alerts != "") {
			echo $alerts;
		}
	?>
	
	<h1 class="panel-heading">Welcome <?php echo $user;?></h1>
		<div id="photoSquare" data-toggle="modal" data-target="#addPhotoModal" style="background:#555;position:relative;max-width:10%;min-height:100px;left:25px;top:25px;float:left;">
			<img src="/projects/bookshop/assets/img/users/<?php echo $contentId;?>.jpg" style="position:relative;left:2.5%;right:5px;top:2.5%;width:95%;height:auto;"></img>
		</div>
		<div style="margin-left:8%;width:80%;min-height:200px;float:left;background:#DCDCDC;margin-top:25px;padding:10px;">
			<div class="col-lg-6" style="background:#FCFCFC;left:20px;">
				<table class="table table-striped table-hover">
					<thead>
						<tr><th colspan='2' style="font-size:18px;">Your purchases:  </th></tr>
						<tr><th>Order #</th><th>Status</th></tr>
					</thead>
					<tbody>
						<tr class="alert alert-danger"><td>23849304</td><td>Unresolved</td></tr>
						<tr class="alert alert-success"><td>23849305</td><td>Completed and paid</td></tr>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6" style="background:#FCFCFC;clear:both;left:20px;top:20px;">
				<table class="table table-striped">
					<thead>
						<tr><th colspan='2' style="font-size:18px;">Your listed items:  </th></tr>
						<tr><th>Item Name</th><th>ISBN</th><th>Image</th><th>Status</th></tr>
					</thead>
					<tbody>
						<?php 
							$i = 0;
							if($items != "") {
								foreach($items as $var) {
									echo "<tr><td>".$var['item_name']."</td><td>".$var['item_isbn']."</td><td><img style='width:50px;height:auto;' src='/projects/bookshop/assets/img/items/".$var['item_file']."'></img></td><td>NOT SOLD</td></tr>";
								}
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-6" style="background:#FCFCFC;clear:both;left:20px;top:20px;">
				<table class="table table-striped">
                                        <thead>
                                               	<tr><th colspan='2' style="font-size:18px;">Your Recent Earnings:</th></tr>
                                                <tr><th>Date sold:  </th><th>Profit:  </th></tr>
                                        </thead>
                                        <tbody>
						<tr><td>02/24/2014</td><td>$50.00</td></tr>
                                        </tbody>
                                </table>

			</div>
		</div>
	
	
	
	
	
	<!-- Modal -->
<div class="modal fade" id="addPhotoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title" id="myModalLabel">Spice up that profile...</h2>
      </div>
      <div class="modal-body">
	  <form role="form" action="/projects/bookshop/actions/uploadFile.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="exampleInputEmail1">Choose a Photo!</label>
				<input type="hidden" name="MAX_FILE_SIZE" value="300000"> 
				<input type="file" name="userFile" id="file"><br>
			</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save It!</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
		</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
</html>
<?php 
//Dismiss all unnecessary vars
if($alerts != "") {
	@$_SESSION['btHTMLALERT'] = "";
}
?>
