<?php
session_start();
$currentPage = "about.php";
$id = $_SESSION['btID'];
/*if($id == "") {
	//then visitor
	$_SESSION['btID'] = "visitor";
	$id = "visitor";
} else {
	//registered user and logged in
	
}*/
?>
<!DOCTYPE html>
<html lang="en">
<?php include('templates/nav.php');?>

    <div class="container" style="margin-top:30px;">

      <div class="row">
        <div class="col-lg-8">
          <img class="img-responsive img-rounded" src="http://placehold.it/900x350"><!-- take out img-rounded if you don't want the rounded corners on the image -->
        </div>
        <div class="col-lg-4">
          <h1>Business Name or Tagline</h1>
          <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
          <a class="btn btn-primary btn-lg" href="#">Call to Action!</a>
        </div>
      </div>
      
      <hr>
      
      <div class="row">
        <div class="col-lg-12">
          <div class="well text-center">
            This is a well that is a great spot for a business tagline or phone number for easy access!
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h2>Heading 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
          <a class="btn btn-default" href="#">More Info</a>
        </div>
        <div class="col-lg-4">
          <h2>Heading 2</h2>
          <p>Phasellus vestibulum sagittis purus laoreet varius. Pellentesque malesuada malesuada mattis. Aliquam sed porta nisi, eget suscipit dolor. Nam ipsum sapien, rhoncus eu leo eu, ultricies pellentesque tellus.</p>
          <a class="btn btn-default" href="#">More Info</a>
        </div>
        <div class="col-lg-4">
          <h2>Heading 3</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin auctor quam ac tempor. Cras a ante sed libero mollis sodales. Praesent fringilla, neque ut ultrices faucibus, dolor eros ultrices neque, nec bibendum arcu ipsum eget justo.</p>
          <a class="btn btn-default" href="#">More Info</a>
        </div>
      </div>
      
      <footer>
        <hr>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Company 2013</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

  </body>
</html>