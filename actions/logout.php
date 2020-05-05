<?php
session_start();
session_destroy();
session_unset($_SESSION);
?>
<html>
<head>
<!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Add custom CSS here -->
    <style>
	body {margin-top: 60px;}
    </style>
	<!-- JavaScript -->
	<script type="text/javascript" src="http://www.omicronconnections.com/projects/bt/assets/sbtemplates/sb-admin/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://www.omicronconnections.com/projects/bt/assets/sbtemplates/sb-admin/js/bootstrap.js"></script>
	<script type="text/javascript">
		setInterval(function(){window.location="<?php echo "/projects/bookshop/";?>";},3000);
	</script>
</head>
<body>
	<?php
		include('../templates/nav.php');
	?>
	<h1>Thanks for visiting!</h1>
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Feel free to use this template for your admin needs! We are using a few different plugins to handle the dynamic tables and charts, so make sure you check out the necessary documentation links provided.
	</div>

</body>
</html>