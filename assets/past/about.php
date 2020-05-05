<?php
session_start();
$sessionID = $_SESSION['sessID'];
require_once('WEB-INF/CoreClasses.php');
$currentPage = "about.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<!-- Le styles -->
    <link href="../assets/bootstrap/templates/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
	body {
		padding-top: 60px;
		padding-bottom: 40px;
    }
	#brandTitle { width:185px;height:50px; }
	#brandTitleText { display:none; }
	h4 { margin-top:20px; }
    </style>
	<script src="http://code.jquery.com/jquery.js"></script>
    <link href="../assets/bootstrap/templates/css/bootstrap-responsive.css" rel="stylesheet"/>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/bootstrap/templates/js/html5shiv.js"></script>
    <![endif]-->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#brandTitleText").fadeIn(4000);
		});
	</script>
</head>
<body>

<?php include('templates/header.php'); ?>
	
	<div class="mainContent">
		<!--<div style="width:75%;position:relative;left:12.5%;background:#DCDCDC;border:2px solid #555;height:100%;">
			<iframe width="40%" height="100%" src="//www.youtube.com/embed/uEMBIn2SDYY" frameborder="0" allowfullscreen></iframe>
		</div>-->
		<?php
			$object = new CoreClasses();
			echo $object->test();
		?>
	</div>

	

<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/bootstrap/templates/js/bootstrap-transition.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-alert.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-modal.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-dropdown.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-tab.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-tooltip.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-popover.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-button.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-collapse.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-carousel.js"></script>
    <script src="../assets/bootstrap/templates/js/bootstrap-typeahead.js"></script>
</body>
</html>
